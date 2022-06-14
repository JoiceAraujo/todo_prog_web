<?php 
  namespace App\Modelos;

  use App\BancoDeDados;

  class Tarefa {
    private $id;
    private $descricao;
    private $importante;
    private $dificuldade;
    private $dataLimite;
    private $dataCriacao;
    private $tarefaRealizada;
    private $usuario; #TODO JOICE: Isso precisa ser um objeto do tipo usuário

    function __construct(string $descricao, string $importante, string $dificuldade,
    string $dataLimite, string $dataCriacao, string $tarefaRealizada, string $usuario) {
      $this->descricao = $descricao;
      $this->importante = $importante;
      $this->dificuldade = $dificuldade;
      $this->dataLimite = $dataLimite;
      $this->dataCriacao = $dataCriacao;
      $this->tarefaRealizada = $tarefaRealizada;
      $this->usuario = $usuario;
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

        var_dump($this->descricao);

        $stm->execute();
    }
  }
?>