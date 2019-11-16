<!-- vai estar na pagina de admin -->
<?php 
include_once('../controller/usuario.controller.php');
//session_start();
//require 'funcoes/banco/conexao.php';

// // echo "<pre>";

// // print_r($_SESSION['administrador']);

// // echo "</pre>";

// //echo "<br> <br>";

// //echo $_SESSION['administrador'][0]->nome;


//  $senhaatual = '123';
// echo md5(strrev($senhaatual));//md5 invertida
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Area Restrita</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/custom.js"></script>
  </head>
  <body>

  <div class="container">
      <div>
          <h2>Area Restrita</h2>
          <div class="retorno"></div>
          <form action="" name="form_login" class="form" method="post">
            <div class="form-group">
                <label for="login">Login</label>
                <input type="text" name="login" class="form-control input-lg" placeholder="Login">   
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Senha</label>
                <input type="password" name="senha" class="form-control" placeholder="Senha">
            </div>

            <button type="submit" class="btn btn-primary btn-lg">
                Logar
            </button>
            <img src="img/load.gif" class="load" alt="Carregando..." style="display: none" />
          </form>
          <br>
          <img src="img/load-login.gif" id="load" style="display: none" />
      </div>
  </div>
  </body>
</html>


     