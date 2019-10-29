<?php
include_once("controller/aluguel.controller.php");

session_start();

  // if(isset($_GET['erro'])) {
  //   echo "<script>alert('Dados de login incorretos')</script>";
  // }           
?>


<!DOCTYPE html>
<html lang="PORTUGUÊS-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <title>Aluguel de Brinquedos | Home</title>
    
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
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  

  </head>
  <body> 
   <!-- Carregando -->
    <!-- <div id="wpf-loader-two">          
      <div class="wpf-loader-two-inner">
        <span>Carregando</span>
      </div>
    </div> --> 
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
                  <p><span class="fa fa-phone"></span> Contatos: (11)95555-5555</p>
                </div>
                <div class="cellphone hidden-xs">
                  <p><span class="fa fa-phone"></span> Contatos: (11)4444-4444</p>
                </div>
                <div class="cellphone hidden-xs">
                  <p><span class="fa fa-envelope"></span> E-mail: nome@gmail.com</p>
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
  <!-- Start slider -->

  <!-- / catg header banner section -->




  <!-- Blog Archive -->
  
  <!-- / Products section -->
  <!-- banner section -->
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
          <div class="aa-myaccount-area2" >         
            <div class="row">
            <div class="col-md-12" >
            <div class="aa-myaccount-login">
            <h4 align="center">Bem vindo <?php echo $_SESSION["nome_logado"]; ?></h4>
      <form method="POST" action="?acao=cadastrar_alu" class="aa-login-form">
        <label>Data de uso<span>*</span></label>
          <input type="date" name="Data_de_uso" class="form-control" required>
        <label>Horas de uso<span>*</span></label>
          <input type="time" name="HorasAlugado" class="form-control" required>
        <label>Endereço<span>*</span></label>
          <input type="text" name="EnderecoMontagem" class="form-control" placeholder="Insira seu Endereço" required>  
        <label >Hora de montagem <span>*</span></label>
          <input type="time" name="Data_Hora_Montagem" class="form-control"  required>
        <label >Hora de desmontagem <span>*</span></label>
          <input type="time" name="Data_Hora_Desmontagem" class="form-control"  required>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label>Forma de pagamento<span>*</span></label>
            </div>

              <select class="form-control" name="FormaPagamento">
                <option selected>Escolha...</option>
                <option value="1">Dinheiro</option>
                <option value="2">Cartão</option>
              </select>


            </div>
            <br>    


          </div>
        </div>
      </div>
    </div>


  </div>
            
  </div>

    <center>
              <div class="col-md-12">
                <div class="checkout-left">
                  <div class="panel-group" id="accordion">
                    <!-- Coupon section -->
                    <div class="panel panel-default aa-checkout-coupon">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" class="collapsed">
                                Escolha seus brinquedos
                            </a>
                          </h4>
                        </div>
                      <div id="collapseOne" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                        <div class="panel-body">
                          <section id="aa-blog-archive">
                            <div class="container">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="aa-blog-archive-area aa-blog-archive-2">
                                    <div class="row">
                                      <div class="col-md-11">
                                        <div class="aa-blog-content">
                                          <div class="row">
                                            <div class="col-md-3 col-sm-4">
                                              <article class="aa-latest-blog-single">
                                                <figure class="aa-blog-img">                    
                                                  <a href="#"><img alt="img" src="img/man/1.jpg"></a>  
                                                    <figcaption class="aa-blog-img-caption">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                              <label class="form-check-label">Escolha</label>
                                                          </div>
                                                  </figcaption>                          
                                                </figure>
                                                <div class="aa-blog-info">
                                                  <h3 class="aa-blog-title"><a href="#">Piscina de bolinha</a></h3> 
                                                </div>
                                              </article>
                                            </div>
                                            <div class="col-md-3 col-sm-4">
                                              <article class="aa-latest-blog-single">
                                                <figure class="aa-blog-img">                    
                                                  <a href="#"><img alt="img" src="img/man/2.jpg"></a>  
                                                    <figcaption class="aa-blog-img-caption">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                              <label class="form-check-label" for="exampleCheck1">Escolha</label>
                                                          </div>
                                                  </figcaption>                          
                                                </figure>
                                                <div class="aa-blog-info">
                                                  <h3 class="aa-blog-title"><a href="#">Cama elástica</a></h3> 
                                                </div>
                                              </article>
                                            </div>
                                            <div class="col-md-3 col-sm-4">
                                              <article class="aa-latest-blog-single">
                                                <figure class="aa-blog-img">                    
                                                  <a href="#"><img alt="img" src="img/man/3.jpg"></a>  
                                                    <figcaption class="aa-blog-img-caption">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                              <label class="form-check-label" for="exampleCheck1">Escolha</label>
                                                          </div>
                                                  </figcaption>                          
                                                </figure>
                                                <div class="aa-blog-info">
                                                  <h3 class="aa-blog-title"><a href="#">Castelo inflável</a></h3> 
                                                </div>
                                              </article>
                                            </div>   
                                            <div class="col-md-3 col-sm-4">
                                              <article class="aa-latest-blog-single">
                                                <figure class="aa-blog-img">                    
                                                  <a href="#"><img alt="img" src="img/man/carrinho.jpg"></a>  
                                                    <figcaption class="aa-blog-img-caption">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                              <label class="form-check-label" for="exampleCheck1">Escolha</label>
                                                          </div>
                                                  </figcaption>                          
                                                </figure>
                                                <div class="aa-blog-info">
                                                  <h3 class="aa-blog-title"><a href="#">Máquina de algodão doce</a></h3> 
                                                </div>
                                              </article>
                                            </div>                   
                                          </div>
                                        </div>              
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                        </div>
                      </div>
                    </div>                          
                  </div>                            
                </div>              
              </div>
    </center>
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

            
                    

  <!-- Support section -->
  <section id="aa-support">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-support-area">
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-truck"></span>
                <h4>Conteudo a combinar (Entrega) </h4>
                <P>Conteudo a combinar</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-clock-o"></span>
                <h4>Conteudo a combinar (Infos)</h4>
                <P>Conteudo a combinar</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-phone"></span>
                <h4>Conteudo a combinar (Suporte)</h4>
                <P>Conteudo a combinar</P>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Support section -->

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
                    <li><a href="#">Home</a></li>
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
                      <p>Endereço:</p>
                      <p><span class="fa fa-phone"></span>(11)4002-8922</p>
                      <p><span class="fa fa-phone"></span>(11)95555-5555</p>
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