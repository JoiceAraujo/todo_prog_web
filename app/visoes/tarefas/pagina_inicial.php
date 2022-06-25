<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="<?= BASEPATH  ?>app/estilos/estilo_pagina_inicial.css">
  
  <title>Página inicial</title>
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
     <?php require 'app/visoes/componentes/alerta.php' ?> 

      <?php if(empty($tarefas)) {?>
        <?php
          $mensagem = "Você ainda não tem tarefas! Tente cadastrar algumas";
          include('app/visoes/componentes/tarefas_vazia.php') 
        ?>
      <?php } else { ?>
        <section id="cabecalhoTodoList">
          <div>
            <h5 id="tituloTodoList"> Todas </h5>
          </div>
        </section>

        <ol id="tarefas">
          <?php foreach ($tarefas as $tarefa) { ?>
            <li>
              <div id=<?= $tarefa->id ?> class="tarefa row">
                <div class="col-5">
                  <p class="form-check-label descricaoTarefa" for="flexCheckDefault">
                    <?= $tarefa->descricao ?>
                  </p>
                </div>
                <div class="iconesDaTarefa col-7 text-end">
                  <span class="data-limite"><?= $tarefa->dataLimite ?></span>
                  <span class="badge rounded-pill text-bg-primary nivelBadge"><?= $tarefa->dificuldade ?></span>
                  <a href="<?= BASEPATH ?>removerTarefa/<?= intval($tarefa->id) ?>">
                    <button class="btn">
                      <ion-icon name="close-circle"></ion-icon>
                    </button>
                  </a>
                </div>
              </div>
            </li>
          <?php } ?>
        </ol>
      <?php } ?>
      <section id="adicionarTarefa">
        <a href="<?= BASEPATH ?>novaTarefa/all">
          <button class="btn">
            <ion-icon name="add-circle-sharp"></ion-icon>
          </button>
        </a>
      </section>
    </section>
  </div>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>