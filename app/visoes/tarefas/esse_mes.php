<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="<?= BASEPATH  ?>app/estilos/estilo_pagina_inicial.css">
  <script language="JavaScript" src="<?= BASEPATH  ?>app/scripts/pagina_inicial.js"></script>

  <title>Esse Mês</title>
</head>
<body>
  <header id="barraDeBusca">
    <?php
      error_reporting(E_ERROR | E_PARSE);
      include('app/visoes/componentes/barra_busca/barra_busca.php'); 
    ?>
  </header>

  <div id="container">
    <section id="barraDeNavegacao">
      <?php
        error_reporting(E_ERROR | E_PARSE);
        include('app/visoes/componentes/barra_lateral/barra_lateral.php'); 
      ?>
    </section>

    <section id="conteudoTodoList">
      <?php if(empty($tarefas)) {?>
        <?php 
          $mensagem = "Você não possui tarefas que devem ser finalizadas esse mês!";
          include('app/visoes/componentes/tarefas_vazia.php') 
        ?>
      <?php } else { ?>
        <section id="cabecalhoTodoList">
          <?php 
            $mes = date('M');
          ?>
          <div>
            <h5>
              Tarefas que devem ser finalizadas esse mês - <?= $mes ?>
            </h5>
          </div>
        </section>

        <div id="barraDeProgresso" class="progress">
          <div id="progressBar" class="progress-bar" role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <ul id="tarefas">
          <?php foreach ($tarefas as $tarefa) { ?>
            <div id=<?= $tarefa->id ?> class="tarefa row">
              <div class="form-check col-5">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <p class="form-check-label descricaoTarefa" for="flexCheckDefault">
                  <?= $tarefa->descricao ?>
                </p>
              </div>
              <div class="iconesDaTarefa col-7 text-end">
                <span class="badge rounded-pill text-bg-primary nivelBadge"><?= $tarefa->dificuldade ?></span>
                <button class="btn">
                  <ion-icon name="close-circle"></ion-icon>
                </button>
              </div>
            </div>
          <?php } ?>
        </ul>
      <?php } ?>
      <section id="adicionarTarefa">
        <a href="<?= BASEPATH ?>novaTarefa">
          <button class="btn">
            <ion-icon name="add-circle-sharp"></ion-icon>
          </button>
        </a>
        <button class="btn">
          <ion-icon name="trash-outline"></ion-icon>
        </button>
      </section>
    </section>
  </div>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>