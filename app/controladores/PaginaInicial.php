<?php  
  namespace App\Controladores;

  use App\Modelos\Tarefa;

  class PaginaInicialController {
    function __construct() {}

    public function today(): void {
      $tarefas = Tarefa::listarTarefasComLimiteParaHoje();
      require __DIR__ . '/../visoes/tarefas/hoje.php';
    }

    public function all(): void {
      $tarefas = Tarefa::listarTodasTarefas();
      require __DIR__ . '/../visoes/tarefas/pagina_inicial.php';
    }

    public function thisWeek(): void {
      $tarefas = Tarefa::listarTarefasComLimiteParaEssaSemana();
      require __DIR__ . '/../visoes/tarefas/essa_semana.php';
    }

    public function thisMonth(): void {
      $tarefas = Tarefa::listarTarefasComLimiteParaEsseMes();
      require __DIR__ . '/../visoes/tarefas/esse_mes.php';
    }

    public function important(): void {
      $tarefas = Tarefa::listarTarefasImportantes();
      require __DIR__ . '/../visoes/tarefas/importantes.php';
    }
  }
?>