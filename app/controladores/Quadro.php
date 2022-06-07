<?php
  namespace App\Controladores;
  use App\Modelos\Quadro;

  class QuadroController {
    public function __construct() {}

    public function novoQuadro($nome) {
      try {
        $quadro = new Quadro(date('d/m/y'), $_POST['id_usuario'], $_POST['nome_quadro']);
        $quadro->salvar();
        header("Refresh:0");
      } catch (\Throwable $th) {
        // Alert com mensagem de erro
      }
    }

    public function listar() : array {
      return Quadro::listarQuadrosPorUsuario(1);
    }
  }
?>