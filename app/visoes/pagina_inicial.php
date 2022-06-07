<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="<?= BASEPATH  ?>app/estilos/estilo_pagina_inicial.css">
  <link rel="stylesheet" href="<?= BASEPATH  ?>app/estilos/estilo_pagina_inicial.css">

  <title>Página inicial</title>
</head>
<body>
  <header id="barraDeBusca">
    <?php
      error_reporting(E_ERROR | E_PARSE);
      include('publico/componentes/barra_busca/barra_busca.php'); 
    ?>
  </header>
  <div id="container">
    <section id="barraDeNavegacao">
      <?php
        error_reporting(E_ERROR | E_PARSE);
        include('publico/componentes/barra_lateral/barra_lateral.php'); 
      ?>
    </section>

    <section id="conteudoTodoList">
      <section id="cabecalhoTodoList">
        <div>
          <h5 id="tituloTodoList">Hoje</h5>
        </div>
        <div id="iconesTodoList">
          01/04/2022
          <ion-icon name="person-add-outline"></ion-icon>
        </div>
      </section>
      
      <div id="barraDeProgresso" class="progress">
        <div id="progressBar" class="progress-bar" role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
      </div>

      <ul id="tarefas">
        <div id="tarefa1" class="taskStyle">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label id="task1Description" class="form-check-label" for="flexCheckDefault">
              Ir ao supermercado
            </label>
          </div>
          <div id="iconesDaTarefa">
            <span class="badge rounded-pill text-bg-primary">Fácil</span>
            <button class="btn" onclick="atualizarDescricaoDaTarefaHTML(1)">
              <ion-icon name="pencil-sharp"></ion-icon>
            </button>
            <button class="btn">
              <ion-icon name="close-circle" onclick="apagarTarefa(1)"></ion-icon>
            </button>
          </div>
        </div>

        <div id="tarefa2" class="taskStyle">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label id="task2Description" class="form-check-label" for="flexCheckDefault">
              Passar no dentista
            </label>
          </div>
          <div id="iconesDaTarefa">
            <span class="badge rounded-pill text-bg-primary">Fácil</span>
            <button class="btn" onclick="atualizarDescricaoDaTarefaHTML(2)">
              <ion-icon name="pencil-sharp"></ion-icon>
            </button>
            <button class="btn">
              <ion-icon name="close-circle" onclick="apagarTarefa(2)"></ion-icon>
            </button>
          </div>
        </div>

        <div id="tarefa3" class="taskStyle">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label id="task3Description" class="form-check-label" for="flexCheckDefault">
              Lavar roupa
            </label>
          </div>
          <div id="iconesDaTarefa">
            <span class="badge rounded-pill text-bg-primary">Fácil</span>
            <button class="btn" onclick="atualizarDescricaoDaTarefaHTML(3)">
              <ion-icon name="pencil-sharp"></ion-icon>
            </button>
            <button class="btn">
              <ion-icon name="close-circle" onclick="apagarTarefa(3)"></ion-icon>
            </button>
          </div>
        </div>

        <div id="tarefa4" class="taskStyle">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label id="task4Description" class="form-check-label" for="flexCheckDefault">
              Comprar geladeira
            </label>
          </div>
          <div id="iconesDaTarefa">
            <span class="badge rounded-pill text-bg-primary">Fácil</span>
            <button class="btn" onclick="atualizarDescricaoDaTarefaHTML(4)">
              <ion-icon name="pencil-sharp"></ion-icon>
            </button>
            <button class="btn">
              <ion-icon name="close-circle" onclick="apagarTarefa(4)"></ion-icon>
            </button>
          </div>
        </div>
      </ul>

      <section id="adicionarTarefa">
        <button class="btn" onclick="adicionarTarefa()">
          <ion-icon name="add-circle-sharp"></ion-icon>
        </button>
        <div id="botoesDeAcaoDoQuadro">
          <button class="btn" onclick="editarQuadro()">
            <ion-icon name="pencil-sharp"></ion-icon>
          </button>
          <button class="btn" onclick="apagarQuadro()">
            <ion-icon name="trash-outline"></ion-icon>
          </button>
        </div>
      </section>
    </section>
  </div>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>