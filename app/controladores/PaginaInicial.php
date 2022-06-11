<?php  
  namespace App\Controladores;

  class PaginaInicialController {
    function __construct() {}

    public function home(): void {
      require __DIR__ . '/../visoes/pagina_inicial.php';
    }
  }
?>