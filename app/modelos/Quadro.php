<?php 
  namespace App\Modelos;
  
  use App\BancoDeDados;

  class Quadro {
    private $id;
    private $nome;
    private $idUsuario;
    private $dataCriacao;

    function __construct(string $dataCriacao, string $idUsuario, string $nome) {
      $this->$nome = $nome;
      $this->$idUsuario = $idUsuario;
      $this->$dataCriacao = $dataCriacao;
    }
  
    public function __get($campo) {
      return $this->$campo;
    }
  
    public function __set($campo, $valor) {
      return $this->$campo = $valor; 
    }

    public function salvar() : void {
      $con = BancoDeDados::pegarOuCriarConexao;
  
      $query = $con->prepare('INSERT INTO quadros (nome, data_criacao, id_usuario) VALUES :nome, :dataCriacao, :idUsuario');
      $query->bindValue(':nome', $this->nome);
      $query->bindValue(':dataCriacao', $this->dataCriacao);
      $query->bindValue(':idUsuario', $this->idUsuario);
      $query->execute();
    }

    public function listarQuadrosPorUsuario($idUsuario) : array {
      $con = BancoDeDados::pegarOuCriarConexao;
      $quadros = [];

      $query = $con->prepare('SELECT * FROM quadros WHERE id_usuario = :idUsuario');
      $query->bindValue(':idUsuario', $idUsuario);
      $query->execute();

      foreach ($query as $row) {
        $quadros = array(
          $row->id => $row->nome,
        );
      }

      return $quadros;
    }
  }
?>