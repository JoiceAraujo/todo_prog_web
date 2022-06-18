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
        date_default_timezone_set('America/Campo_Grande');
        $dataSemFormatacao = strtotime($_POST['dataLimite']);

        $tarefa = new Tarefa(
        $_POST['descricao'], 
        $_POST['importante'], 
        $_POST['dificuldade'],
        date("d/m/y", $dataSemFormatacao),
        date('d/m/y'),
        'false',
        '1');

        $tarefa->salvar();
        header('Location: ' . BASEPATH . 'all');
      } catch (\Throwable $th) {
        header('Location: ' . BASEPATH . 'all');
      }
      # TODO JOICE: Se der tempo, criar um alert para mandar uma mensagem
    }
  }
?>