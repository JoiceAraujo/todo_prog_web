<?php 
  error_reporting(E_ALL ^ E_WARNING);
  
  define('BASEPATH', '/atividades/todo_prog_web/');

  include_once __DIR__ . '/app/BancoDeDados.php';
  include_once __DIR__ . '/app/controladores/Tarefa.php';
  include_once __DIR__ . '/app/controladores/Usuario.php';
  include_once __DIR__ . '/app/controladores/PaginaInicial.php';
  include_once __DIR__ . '/libs/Route.php';


  use App\BancoDeDados;
  use App\Controladores\TarefaController;
  use App\Controladores\UsuarioController;
  use App\Controladores\PaginaInicialController;
  use Steampixel\Route;

  BancoDeDados::criarSchema();

  $tarefaCtrl = new TarefaController();
  $paginaInicialCtrl = new PaginaInicialController();

  Route::add('/all', fn() => $paginaInicialCtrl->all(), ['get']);
  Route::add('/today', fn() => $paginaInicialCtrl->today(), ['get']);
  Route::add('/this-week', fn() => $paginaInicialCtrl->thisWeek(), ['get']);
  Route::add('/this-month', fn() => $paginaInicialCtrl->thisMonth(), ['get']);
  Route::add('/important', fn() => $paginaInicialCtrl->important(), ['get']);
  Route::add('/novaTarefa', fn() => $tarefaCtrl->novaTarefaVisao(), ['get']);
  
  Route::add('/novaTarefa', fn() => $tarefaCtrl->novaTarefa(), ['post']);

    /* Fazer a lógica do login, se der tempo
  $usuarioCtrl = new UsuarioController();
  Route::add('/login', fn() => $usuarioCtrl->login(), ['get']);
  Route::add('/cadastrar', fn() => $usuarioCtrl->cadastrar(), ['get']); */


  Route::add('/', function () {
    header('Location: ' . BASEPATH . 'all');
  }, ['get']);
  
  Route::add('/.*', function () {
    http_response_code(404);
    echo "Page not found!";
  }, ['get']);

  Route::run(BASEPATH);
?>