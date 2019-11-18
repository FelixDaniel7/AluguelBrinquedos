<!-- vai estar na pagina de admin -->
<?php 
include_once('../controller/usuario.controller.php');
session_start();

$usu->Logou('administrador');//se ja esta logado

// echo "<pre>";
// print_r($_SESSION['administrador']);
// echo "</pre>";
// echo "<br> <br>";
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

    <!-- Jquery -->
    <script src="../js/jquery-3.4.1.min.js"></script>
    <!-- Ajax -->
    <script src="../ajax/usuario.ajax.js"></script>
    <!-- Alertas Bonitinhos -->
    <script src="../js/sweetalert.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
  </head>
  <body>

  <div class="container">
  <?php if(@$_SESSION['tentativas'] < 3){ ?>    
  <div>
          <h2>Area Restrita</h2>
         


          

          <form action="" name="form_login" class="form" method="post">
            <div class="form-group">
                <label for="login">Login</label>
                <input type="text" name="txtlogin" class="form-control input-lg" placeholder="Login">   
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Senha</label>
                <input type="password" name="txtsenha" class="form-control" placeholder="Senha">
            </div>

            <button type="submit" id="btn_login" class="btn btn-primary btn-lg">
                Logar
            </button>
            <img src="../img/load.gif" class="load" alt="Carregando..." style="display: none" />
          </form>
          <br>
          <img src="../img/load-login.gif" id="load" style="display: none" />


          <?php
               }
               else {
              $n1 = rand(1,10);
              $n2 = rand(1,10);

              $total = $n1 + $n2;
            ?>
          <!-- <div id="form_verificar" style="display: none"> -->
            
          
            <h5 class="card-title text-center">Verificação</h5>
            <form name="form_verificar" action="?acao=verificar" method="POST" class="form-signin">
              <div class="form-label-group">
              <label for="inputEmail"><?php echo "Responda Qunato é $n1 + $n2 ? "; ?></label>
                <input type="number" name="txtresposta" class="form-control" required autofocus>
              </div>
                <input type="hidden"  name="txtcerta" value="<?php echo $total;?>" class="form-control">
              <div class="custom-control custom-checkbox mb-3"></div>
              <input type="submit" value="Verificar" class="btn btn-lg btn-primary btn-block text-uppercase">
            </form>


            <!-- </div> -->
              <?php } ?>


      </div>
  </div>
  </body>
</html>