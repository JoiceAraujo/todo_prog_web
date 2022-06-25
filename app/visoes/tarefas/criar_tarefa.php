<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

  <link rel="stylesheet" href="<?= BASEPATH  ?>app/estilos/estilo_criar_tarefa.css">
  <title>Nova Tarefa</title>
</head>
<body>
  <?php
    date_default_timezone_set('America/Campo_Grande'); 
    
    if(empty($paginaRetorno)) {
      $paginaRetorno = "all";
    }
    $path = BASEPATH . $paginaRetorno;
  ?>
  <a href="<?= $path ?>" class="btn botaoDeVoltar">
    <i class='bx bx-arrow-back icon'></i>
  </a>

  <form method="POST" action="<?= BASEPATH  ?>novaTarefa">
    <h4>Preencha os dados para criar uma tarefa</h4>

    <div class="mb-3">
      <label for="descricao" class="form-label">Descrição</label>
      <input type="text" class="form-control" id="descricao" name="descricao" required>
    </div>

    <div class="mb-3">
      <label for="importante" class="form-label">É uma tarefa importante?</label>
      <select class="form-select" id="importante" name="importante" required>
        <option value="">Selecione...</option>
        <option value="sim">Sim</option>
        <option value="nao">Não</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="dificuldade" class="form-label">Qual o nível de dificuldade dessa tarefa?</label>
      <select class="form-select" id="dificuldade" name="dificuldade" required>
        <option value="">Selecione...</option>
        <option value="Fácil">Fácil</option>
        <option value="Médio">Média</option>
        <option value="Difícil">Difícil</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="dataLimite" class="form-label">Qual a data limite para realizar essa tarefa?</label>
      <input type="date" class="form-control" id="dataLimite" name="dataLimite" min=<?= date("Y-m-d") ?> required>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>    
  </form>
</body>
</html>