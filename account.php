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


  <header id="aa-header">

    <!-- Inicio do menu superior -->
    <?php
      include "menu-superior.php"
    ?> 
    <!-- Fim do menu superior -->

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
 

      <!-- Começo do menu inferior -->
      <?php
        include "menu-inferior.php";
      
      // Fim do menu inferior 

      // Começo da tela de login
      
        include "login.php";
      ?> 
      <!-- Fim da tela de cadastro --> 


    
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