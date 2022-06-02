<?php
namespace App\Modelos;

use App\Database;

class Usuario {
  private $id;
  private $nome;
  private $email;
  private $senha;

  function __construct(string $nome, string $email, string $senha) {
    $this->$nome = $nome;
    $this->$email = $email;
    $this->$senha = $senha;
  }

  public function __get($campo) {
    return $this->$campo;
  }

  public function __set($campo, $valor) {
    return $this->$campo = $valor; 
  }

  public function salvar(): void {
    #TODO: Implementar a lógica
  }

  
}
?>