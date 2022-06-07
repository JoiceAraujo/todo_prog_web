<?php 
  error_reporting(E_ALL ^ E_WARNING);
  
  define('BASEPATH', '/atividades/todo_prog_web/');

  include_once __DIR__ . '/app/BancoDeDados.php';
  include_once __DIR__ . '/app/controladores/PaginaInicial.php';
  include_once __DIR__ . '/app/controladores/Usuario.php';
  include_once __DIR__ . '/libs/Route.php';


  use App\BancoDeDados;
  use App\Controladores\PaginaInicialController;
  use App\Controladores\UsuarioController;
  use Steampixel\Route;

  BancoDeDados::criarSchema();

  $paginaInicialCtrl = new PaginaInicialController();
  $usuarioCtrl = new UsuarioController();

  Route::add('/home', fn() => $paginaInicialCtrl->home(), ['get']);
  Route::add('/cadastrar', fn() => $usuarioCtrl->cadastrar(), ['get']);
  Route::add('/login', fn() => $usuarioCtrl->login(), ['get']);


  Route::add('/', function () {
    header('Location: ' . BASEPATH . 'login');
  }, ['get']);
  
  Route::add('/.*', function () {
    http_response_code(404);
    echo "Page not found!";
  }, ['get']);

  Route::run(BASEPATH);
?>