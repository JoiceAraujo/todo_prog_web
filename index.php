<?php 
  error_reporting(E_ALL ^ E_WARNING);

  use App\BancoDeDados;
  use App\Controladores\TarefaController;
  use App\Controladores\UsuarioController;
  use App\Controladores\PaginaController;
  use Steampixel\Route;
  
  include_once __DIR__ . '/app/BancoDeDados.php';
  include_once __DIR__ . '/app/controladores/Tarefa.php';
  include_once __DIR__ . '/app/controladores/Usuario.php';
  include_once __DIR__ . '/app/controladores/Pagina.php';
  include_once __DIR__ . '/libs/Route.php';
  
  define('BASEPATH', '/atividades/todo_prog_web/');

  BancoDeDados::criarSchema();

  $tarefaCtrl = new TarefaController();
  $paginaInicialCtrl = new PaginaController();

  Route::add('/all', fn() => $paginaInicialCtrl->all(), ['get']);
  Route::add('/today', fn() => $paginaInicialCtrl->today(), ['get']);
  Route::add('/this-week', fn() => $paginaInicialCtrl->thisWeek(), ['get']);
  Route::add('/this-month', fn() => $paginaInicialCtrl->thisMonth(), ['get']);
  Route::add('/important', fn() => $paginaInicialCtrl->important(), ['get']);
  Route::add('/novaTarefa/([A-Za-z-]*)', fn($param) => $tarefaCtrl->novaTarefaVisao($param));
  Route::add('/novaTarefa', fn() => $tarefaCtrl->novaTarefa(), ['post']);

  Route::add('/', function () {
    header('Location: ' . BASEPATH . 'all');
  }, ['get']);
  
  Route::add('/.*', function () {
    http_response_code(404);
    echo "Page not found!";
  }, ['get']);

  Route::run(BASEPATH);
?>