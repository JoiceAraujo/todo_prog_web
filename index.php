<?php 
  error_reporting(E_ALL ^ E_WARNING);

  include_once __DIR__ . '/app/BancoDeDados.php';

  use App\BancoDeDados;

  BancoDeDados::criarSchema();
?>