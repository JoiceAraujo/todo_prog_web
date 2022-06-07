<?php 
  namespace App\Controladores;

  class UsuarioController {
    function __construct() {}

    public function cadastrar() : void {
      require __DIR__ . '/../visoes/usuario/cadastro.php';
    }

    public function login() : void {
      require __DIR__ . '/../visoes/usuario/login.php';
    }
  }

?>