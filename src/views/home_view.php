<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="../styles/home_view_style.css">

  <title>Página inicial</title>
</head>
<body>
  <header id="searchBar">
    <style>
      <?php include('../../public/components/barraBusca/barraBuscaStyle.css'); ?>
    </style>
    <?php
      error_reporting(E_ERROR | E_PARSE);
      include('../../public/components/barraBusca/barra_busca.php'); 
    ?>
  </header>
  <div id="container">
    <section id="navBar">
      <style>
        <?php include('../../public/components/barraLateral/barraLateralStyle.css'); ?>
      </style>
      <?php
        error_reporting(E_ERROR | E_PARSE);
        include('../../public/components/barraLateral/barra_lateral.php'); 
      ?>
    </section>

    <section id="todoListContent">
      <section id="todoListHeader">
        <div>
          <h5 id="todoListTitle">Hoje</h5>
        </div>
        <div id="todoListIcons">
          01/04/2022
          <ion-icon name="person-add-outline"></ion-icon>
        </div>
      </section>
      
      <div id="progressBarIndicator" class="progress">
        <div id="progressBar" class="progress-bar" role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
      </div>

      <ul id="tasks">
        <div id="task1" class="taskStyle">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label id="task1Description" class="form-check-label" for="flexCheckDefault">
              Ir ao supermercado
            </label>
          </div>
          <div id="todoIcons">
            <span class="badge rounded-pill text-bg-primary">Fácil</span>
            <button class="btn" onclick="updateTaskDescriptionHTML(1)">
              <ion-icon name="pencil-sharp"></ion-icon>
            </button>
            <button class="btn">
              <ion-icon name="close-circle" onclick="deleteTask(1)"></ion-icon>
            </button>
          </div>
        </div>

        <div id="task2" class="taskStyle">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label id="task2Description" class="form-check-label" for="flexCheckDefault">
              Passar no dentista
            </label>
          </div>
          <div id="todoIcons">
            <span class="badge rounded-pill text-bg-primary">Fácil</span>
            <button class="btn" onclick="updateTaskDescriptionHTML(2)">
              <ion-icon name="pencil-sharp"></ion-icon>
            </button>
            <button class="btn">
              <ion-icon name="close-circle" onclick="deleteTask(2)"></ion-icon>
            </button>
          </div>
        </div>

        <div id="task3" class="taskStyle">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label id="task3Description" class="form-check-label" for="flexCheckDefault">
              Lavar roupa
            </label>
          </div>
          <div id="todoIcons">
            <span class="badge rounded-pill text-bg-primary">Fácil</span>
            <button class="btn" onclick="updateTaskDescriptionHTML(3)">
              <ion-icon name="pencil-sharp"></ion-icon>
            </button>
            <button class="btn">
              <ion-icon name="close-circle" onclick="deleteTask(3)"></ion-icon>
            </button>
          </div>
        </div>

        <div id="task4" class="taskStyle">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label id="task4Description" class="form-check-label" for="flexCheckDefault">
              Comprar geladeira
            </label>
          </div>
          <div id="todoIcons">
            <span class="badge rounded-pill text-bg-primary">Fácil</span>
            <button class="btn" onclick="updateTaskDescriptionHTML(4)">
              <ion-icon name="pencil-sharp"></ion-icon>
            </button>
            <button class="btn">
              <ion-icon name="close-circle" onclick="deleteTask(4)"></ion-icon>
            </button>
          </div>
        </div>
      </ul>

      <section id="addTask">
        <button class="btn" onclick="addTask()">
          <ion-icon name="add-circle-sharp"></ion-icon>
        </button>
        <div id="editTodoBoard">
          <button class="btn" onclick="editTodoBoard()">
            <ion-icon name="pencil-sharp"></ion-icon>
          </button>
          <button class="btn" onclick="deleteTodoBoard()">
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