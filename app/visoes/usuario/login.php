<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEPATH ?>\app\estilos\estilo_login.css">
    <title>Login To do</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Faustina:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="formularioLogin">
            <form id="formularioLogin" class="formularioLogin">
                <h3 class="tituloLogin">To Do List</h3>
                <input type="text" class="login" id="loginName" placeholder="Digite o seu nome:"/>
                <input type="password" class="password" id="loginPassword" placeholder="Senha:"/>
                <button type="submit" class="buttonConfirmLogin">Login</button>
                <span class="semCadastro">Não tem cadastro? <a rel="stylesheet" href="<?= BASEPATH ?>cadastrar"> Acesse aqui.</a></span>
            </form>
        </div>
    </div>
</body>
</html>
