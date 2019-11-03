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
    <link href="css/brinquedos.css" rel="stylesheet">     
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
        <div class="col-md-12" >
          <div class="aa-myaccount-area2">         
            <div class="row">
            <div class="col-md-6">
            <div class="aa-myaccount-login">
            <div align="center">
            <h4>Brinquedos</h4>
            </div>
            
            <section id="aa-slider">
    <div class="aa-slider-area">
      <div id="sequence" class="seq">
        <div class="seq-screen">
          <ul class="seq-canvas">

            <li>
              <div class="seq-model" >
                <img data-seq src="img/slider/bolinha.jpg"  alt="Men slide img" />
              </div>
              <div class="seq-title" style="margin-top: 50px;">       
                <h2 data-seq>Piscina de bolinha</h2>  
                <input type="checkbox" class="form-control" id="piscina" name="piscina">               
              </div>  
              </li>           
            <li>
              <div class="seq-model">
                <img data-seq src="img/slider/caminha.jpg"  alt="Wristwatch slide img" />
              </div>
              <div class="seq-title" style="margin-top: 50px;" >                
                <h2 data-seq>Cama elastica</h2>   
                <input type="checkbox" class="form-control" id="cama" name="cama">             
              </div>
              </li>
            <li>
              <div class="seq-model">
                <img data-seq src="img/slider/castelo.jpg" alt="Women Jeans slide img" />
              </div>
              <div class="seq-title" style="margin-top: 50px;">                
                <h2 data-seq>Castelo inflável</h2>  
                <input type="checkbox" class="form-control" id="castelo" name="castelo">                 
              </div>
            </li>
            <!-- single slide item -->           
            <li>
              <div class="seq-model">
                <img data-seq src="img/slider/maquina.jpg" alt="Shoes slide img" />
              </div>
              <div class="seq-title" style="margin-top: 50px;">                 
                <h2 data-seq>Maquina de algodão doce</h2>
                <input type="checkbox" class="form-control" id="maquina" name="maquina">                
              </div>
              <div>
            </li>
                  
          </ul>
        </div>
        <!-- slider navigation btn -->
        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
          <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
          <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
        </fieldset>
      </div>
    </div>
  </section>                   
            </div>
            </div>
                  
          <div class="col-md-6">
          <div class="aa-myaccount-register aa-login-form">                 
          <div align="center">
            <h4>Aluguel de brinquedos</h4>
        </div>
        <form>
        <label>Data de uso<span>*</span></label>
          <input type="date" name="Data_de_uso" class="form-control" required>
        <label>Horas de uso<span>*</span></label>
          <input type="number" name="HorasAlugado" class="form-control" required>
        <label>Endereço<span>*</span></label>
          <input type="text" name="EnderecoMontagem" class="form-control" placeholder="Insira seu Endereço" required>  
        <label >Hora de montagem <span>*</span></label>
          <input type="time" name="Data_Hora_Montagem" class="form-control"  required>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label>Forma de pagamento<span>*</span></label>
            </div>

              <select class="form-control" name="FormaPagamento">
                <option selected>Escolha...</option>
                <option value="1">Dinheiro</option>
                <option value="2">Cartão</option>
              </select>

              <div>                
                </div>
          <center>
              <br>        
          </div>
          <div align="center">
              <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">Conferir</a> 
            </div>
        </div>
      </div>                 
    </div>
  </div>
</div>
          
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