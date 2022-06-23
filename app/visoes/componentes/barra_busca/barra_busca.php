<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="estilo_barra_busca.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Londrina+Outline&display=swap" rel="stylesheet">
    <style>
        .container-fluid{
    width:100%;
    height: 6%;
    background-color:#ffffff;
    box-shadow: 0px 2px 10px black;
}

.titulo_top_left{
    font-size:35px;
    font-weight: 600;
    font-family: 'Londrina Outline', cursive;
    
}

.submit-lente {
    position:absolute;
    top:2px; left:0;
    z-index:10;
    border:none;
    background:transparent;
    outline:none;
  }
  
  .submit-line_top_mid {
    position: relative;
    width: 500px;
  }
  
  .submit-line_top_mid input {
    width: 100%;
    background-color: #E5E5E5;
    border-radius: 10px;

}
.detalhes{
    align-items: center;
    display: flex;
    flex-direction: row;
    justify-content: space-evenly;
}
.barraPesquisa{
    padding-left: 30px;
}
.noBorderButton{
    border:none;
    outline: none;
    background-color: transparent;
}
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 d-flex justify-content-center align-items-center">
              <h3 class="titulo_top_left">To-Do  <i class="bi bi-check-square-fill"></i></h3>
            </div>
            <div class="col-md-8" style="display: flex;justify-content: space-evenly;align-items: center;">
                <div class="submit-line_top_mid">
                    <button class="submit-lente" type="submit" style="margin-left: 15px">
                      <i class="bi bi-search"></i>
                    </button>
                    <input class="barraPesquisa" type="text" />
                </div>
            </div>
        </div>
    </div>
</body>
</html>