<?php  
  namespace App\Controladores;

  include 'app/modelos/Tarefa.php';

  use App\Modelos\Tarefa;

  class TarefaController {
    function __construct() {}

    public function novaTarefaVisao(): void {
      require __DIR__ . '/../visoes/tarefas/criar_tarefa.php';
    }

    public function novaTarefa(): void {
      try {
        $tarefa = new Tarefa(
        $_POST['descricao'], 
        $_POST['importante'], 
        $_POST['dificuldade'],
        $_POST['dataLimite'],
        date('d/m/y'),
        'false',
        '1');

        $tarefa->salvar();
        header('Location: ' . BASEPATH . 'home');
      } catch (\Throwable $th) {
        header('Location: ' . BASEPATH . 'home');
      }
      # TODO JOICE: Se der tempo, criar um alert para mandar uma mensagem
    }
  }
?>