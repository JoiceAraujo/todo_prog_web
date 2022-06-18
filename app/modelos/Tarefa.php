<?php 
  namespace App\Modelos;

  use \Datetime;
  use \DateInterval;
  use \DatePeriod;
  use App\BancoDeDados;

  class Tarefa {
    private $id;
    private $descricao;
    private $importante;
    private $dificuldade;
    private $dataLimite;
    private $dataCriacao;
    private $tarefaRealizada;
    private $usuario;

    public function __construct()
    {
        $arguments = func_get_args();
        $numberOfArguments = func_num_args();

        if (method_exists($this, $function = '__construct'.$numberOfArguments)) {
            call_user_func_array(array($this, $function), $arguments);
        }
    }
   
    public function __construct7(string $descricao, string $importante, string $dificuldade,
    string $dataLimite, string $dataCriacao, string $tarefaRealizada, string $usuario)
    {
      $this->descricao = $descricao;
      $this->importante = $importante;
      $this->dificuldade = $dificuldade;
      $this->dataLimite = $dataLimite;
      $this->dataCriacao = $dataCriacao;
      $this->tarefaRealizada = $tarefaRealizada;
      $this->usuario = $usuario;
    }
   
    public function __construct4(string $id, string $descricao, string $dificuldade,
    string $tarefaRealizada)
    {
      $this->id = $id;
      $this->descricao = $descricao;
      $this->dificuldade = $dificuldade;
      $this->tarefaRealizada = $tarefaRealizada;
    }
  
    public function __get($campo) {
      return $this->$campo;
    }
  
    public function __set($campo, $valor) {
      return $this->$campo = $valor; 
    }

    public function salvar(): void
    {
        $con = BancoDeDados::pegarOuCriarConexao();

        $stm = $con->prepare('INSERT INTO tarefas (descricao, importante, dificuldade, 
        data_limite, data_criacao, id_usuario, tarefa_realizada) VALUES (:descricao, :importante, 
        :dificuldade, :data_limite, :data_criacao, :id_usuario, :tarefa_realizada)');

        $stm->bindValue(':descricao', $this->descricao);
        $stm->bindValue(':importante', $this->importante);
        $stm->bindValue(':dificuldade', $this->dificuldade);
        $stm->bindValue(':data_limite', $this->dataLimite);
        $stm->bindValue(':data_criacao', $this->dataCriacao);
        $stm->bindValue(':id_usuario', $this->usuario);
        $stm->bindValue(':tarefa_realizada', $this->tarefaRealizada);

        $stm->execute();
    }

    static public function listarTodasTarefas(): array
    {
      $con = BancoDeDados::pegarOuCriarConexao();
      $tarefas = array();

      $sql = 'SELECT id, tarefa_realizada, descricao, dificuldade FROM tarefas
      where id_usuario = :usuario';
      $stm = $con->prepare($sql);
      $stm->execute(array('usuario' => 1));
      $tarefasBD = $stm->fetchAll();

      foreach($tarefasBD as $row) {
        $tarefa = new Tarefa($row['id'], $row['descricao'], $row['dificuldade'], $row['tarefa_realizada']);
        $tarefas[] = $tarefa;
      }

      return $tarefas;
    }

    static public function listarTarefasComLimiteParaHoje() : array
    {
      $con = BancoDeDados::pegarOuCriarConexao();
      $tarefas = array();

      $sql = 'SELECT id, tarefa_realizada, descricao, dificuldade FROM tarefas
      where id_usuario = :usuario and data_limite = :dataAtual';
      $stm = $con->prepare($sql);
      $stm->execute(array('usuario' => 1, 'dataAtual' => date('d/m/y')));
      $tarefasBD = $stm->fetchAll();

      foreach($tarefasBD as $row) {
        $tarefa = new Tarefa($row['id'], $row['descricao'], $row['dificuldade'], $row['tarefa_realizada']);
        $tarefas[] = $tarefa;
      }

      return $tarefas;
    }

    static public function listarTarefasComLimiteParaEssaSemana() : array
    {
      $con = BancoDeDados::pegarOuCriarConexao();
      $tarefas = array();
      $periodo = Tarefa::montarPeriodo();

      if(empty($periodo)) {
        return $tarefas; 
      }

      $sql = 'SELECT id, tarefa_realizada, descricao, dificuldade FROM tarefas
        where id_usuario = :usuario and 
        data_limite = :data01 OR 
        data_limite = :data02 OR 
        data_limite = :data03 OR
        data_limite = :data04 OR
        data_limite = :data05 OR
        data_limite = :data06 OR
        data_limite = :data07';
        
        $stm = $con->prepare($sql);
        $stm->execute(
          array(
            'usuario' => 1,
            'data01' => $periodo[0], 
            'data02' => $periodo[1],
            'data03' => $periodo[2],
            'data04' => $periodo[3],
            'data05' => $periodo[4],
            'data06' => $periodo[5],
            'data07' => $periodo[6])
        );

        $tarefasBD = $stm->fetchAll();

        foreach($tarefasBD as $row) {
          $tarefa = new Tarefa($row['id'], $row['descricao'], $row['dificuldade'], $row['tarefa_realizada']);
          $tarefas[] = $tarefa;
        }

      return $tarefas;
    }

    static private function montarPeriodo() : array
    {
      $dataAtual = date('Y-m-d');
      $inicio = new DateTime($dataAtual);
      $fim = new DateTime($dataAtual);
      $fim = $fim->modify( '+7 day' );
      $intervalo = new DateInterval('P1D');
  
      $periodo = new DatePeriod($inicio, $intervalo, $fim);
      $periodoFormatado = array();
      
      foreach($periodo as $data){
        $periodoFormatado[] = $data->format('d/m/y');
      }

      return $periodoFormatado;
    }

    static public function listarTarefasComLimiteParaEsseMes() : array 
    {
      $con = BancoDeDados::pegarOuCriarConexao();
      $tarefas = array();

      $sql = 'SELECT id, tarefa_realizada, descricao, dificuldade, data_limite, INSTR(data_limite, :mes) sb 
      FROM tarefas where id_usuario = :usuario and sb > 0';
      $stm = $con->prepare($sql);
      $stm->execute(array('usuario' => 1, 'mes' => date('/m/')));
      $tarefasBD = $stm->fetchAll();

      foreach($tarefasBD as $row) {
        $tarefa = new Tarefa($row['id'], $row['descricao'], $row['dificuldade'], $row['tarefa_realizada']);
        $tarefas[] = $tarefa;
      }

      return $tarefas;
    }

    static public function listarTarefasImportantes() : array
    {
      $con = BancoDeDados::pegarOuCriarConexao();
      $tarefas = array();

      $sql = 'SELECT id, tarefa_realizada, descricao, dificuldade FROM tarefas 
      where id_usuario = :usuario and importante = :importante';
      $stm = $con->prepare($sql);
      $stm->execute(array('usuario' => 1, 'importante' => 'sim'));
      $tarefasBD = $stm->fetchAll();

      foreach($tarefasBD as $row) {
        $tarefa = new Tarefa($row['id'], $row['descricao'], $row['dificuldade'], $row['tarefa_realizada']);
        $tarefas[] = $tarefa;
      }

      return $tarefas;
    }
  }
?>