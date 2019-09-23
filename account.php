<?php
include_once("controller/cliente.controller.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Aluguel de Brinquedos | Conta</title>
    
    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
    <!-- Top Slider CSS -->
    <link href="css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <script src="js/validador.js"></script>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body onload="mCPF(), mTEL()">
   <!-- wpf loader Two -->
    <div id="wpf-loader-two">          
      <div class="wpf-loader-two-inner">
        <span>Carregando</span>
      </div>
    </div> 
    <!-- / wpf loader Two -->       
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->
  <header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-top-area">
              <!-- start header top left -->
              <div class="aa-header-top-left">
                <!-- start language -->
                
                <!-- / currency -->
                <!-- start cellphone -->
                <div class="cellphone hidden-xs">
                  <p><span class="fa fa-phone"></span> Contatos:95425-4521</p>
                </div>
                <div class="cellphone hidden-xs">
                  <p><span class="fa fa-phone"></span> Contatos:95425-4521</p>
                </div>
                <!-- / cellphone -->
              </div>
              <!-- / header top left -->
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                  <li><a href="account.php">Cadastrar-se</a></li>
                  <li><a href="" data-toggle="modal" data-target="#login-modal">Entrar</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header top  -->
    <!-- start header bottom  -->
    <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <!-- logo  -->
              <div class="aa-logo">
                <!-- Text based logo -->
                <a href="index.php">
                  <span class="fa fa-shopping-cart"></span>
                  <!--<p>daily<strong>Shop</strong> <span>Your Shopping Partner</span></p>
                </a>-->
                <!--  img based logo -->
                <a href="index.php"><img src="img/logo1.jpg" alt="logo img"></a> 
              </div>
              <!-- / logo  -->
               <!-- cart box -->
              
              <!-- / cart box -->
              <!-- search box -->
              <div class="aa-search-box">
                <form action="">
                  <input type="text" name="" id="" placeholder="Pesquise">
                  <button type="submit"><span class="fa fa-search"></span></button>
                </form>
              </div>
              <!-- / search box -->             
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header bottom  -->
  </header>
  <!-- / header section -->
  <!-- menu -->
  <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>          
          </div>
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
              <li><a href="index.php">Home</a></li>
              <li><a href="#">Brinquedos</a></li>
              <li><a href="#">Galeria</a></li> 
              <li><a href="#">Sobre</a></li>           
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>       
    </div>
  </section>
  <!-- / menu -->
  <!-- / catg header banner section -->

 <!-- Cart view section -->

 <div>
&nbsp  
</div>
<div>
&nbsp  
</div>
  <section id="aa-myaccount">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-myaccount-area2">         
            <div class="row">
            <div class="col-md-6">
            <div class="aa-myaccount-login">
            <h4>Criar Conta</h4>
      <form method="POST" action="?acao=cadastrar_cli" class="aa-login-form">
        <label for="NomeComp">Nome Completo<span>*</span></label>
          <input type="text" name="txtnome" class="form-control" placeholder="Insira seu nome:" maxlength="50" pattern="[a-zA-Z\s]+$" required>
        <label for="cpf">CPF<span>*</span></label>
          <input type="text" name="txtcpf" class="form-control" maxlength="14" placeholder="Insira seu CPF" onkeydown="javascript: fMasc( this, mCPF );" required>
        <label for="idEndereco">Endereço<span>*</span></label>
          <input type="text" name="txtendereco" class="form-control" maxlength="100" placeholder="Insira seu Endereço" required>        
        <label for="idTelefone">Telefone com DDD<span>*</span></label>
          <input type="tell" name="txttelefone" class="form-control" maxlength="15" required>
          <!--<input type="tel" class="form-control" placeholder="Telefone" name="phone" maxlength="15" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" required">-->
          <br>                     
            </div>
            </div>
                  
          <div class="col-md-6">
          <div class="aa-myaccount-register aa-login-form">                 
          <h4>Já tem cadastro? Alugue já</h4>
        <label for="idEmail">Email para Contato<span>*</span></label>
          <input type="email" name="txtemail" class="form-control" maxlength="50" placeholder="Insira o Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
          <br>
        <label for="idSenha">Senha:<span>*</span></label>
          <input type="password" name="txtsenha" class="form-control" maxlength="40" required>
        <label for="idCSenha">Confirme sua Senha:<span>*</span></label>
          <input type="password" name="txtCsenha" class="form-control" maxlength="40" required>
          <br>                 
          </div>
        </div>
      </div>                 
    </div>
  </div>
</div>
          <center>
          <input type="submit" name="Enviar" class="aa-browse-btn">
      </form>
  <div>
  &nbsp  
  </div>
  <div>
  &nbsp  
  </div>
</section>
 <!-- / Cart view section -->
  <!-- footer -->  
  <footer id="aa-footer">
    <!-- footer bottom -->
    <div class="aa-footer-top">
     <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-top-area">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <h3>Menu</h3>
                  <ul class="aa-footer-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Brinquedos</a></li>
                    <li><a href="#">Galeria</a></li>
                    <li><a href="#">Sobre</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Contate-nos</h3>
                    <address>
                      <p>Endereço</p>
                      <p><span class="fa fa-phone"></span>4002-8922</p>
                      <p><span class="fa fa-envelope"></span>Email@gmail.com</p>
                    </address>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
    </div>
  <!-- / footer -->
    <!-- Login Modal -->  
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">                      
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Login</h4>
          <form class="aa-login-form" action="?acao=login_cli" method="POST">
            <label for="">Endereço de Email<span>*</span></label>
            <input type="text" name="txtlogin" placeholder="nome@gmail.com">
            <label for="">Senha<span>*</span></label>
            <input type="password" name="txtsenhalogin" placeholder="Senha">
            <button class="aa-browse-btn" type="submit">Entrar</button>
            <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Lembre-se </label>
            <p class="aa-lost-password"><a href="#"> Perdeu sua senha?</a></p>
            <div class="aa-register-now">
              Não tem uma conta?<a href="account.php">Registre-se agora!</a>
            </div>
          </form>
        </div>                        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div> 


    
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.js"></script>  
  <!-- SmartMenus jQuery plugin -->
  <script type="text/javascript" src="js/jquery.smartmenus.js"></script>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>  
  <!-- To Slider JS -->
  <script src="js/sequence.js"></script>
  <script src="js/sequence-theme.modern-slide-in.js"></script>  
  <!-- Product view slider -->
  <script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
  <script type="text/javascript" src="js/jquery.simpleLens.js"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="js/slick.js"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="js/nouislider.js"></script>
  <!-- Custom js -->
  <script src="js/custom.js"></script> 
  </body>
</html>