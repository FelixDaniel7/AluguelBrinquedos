<?php
include_once("controller/cliente.controller.php");

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
    <!-- Fonte -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">   
    <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">    
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
    <link href="css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">
    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">    
    <!-- Fonte do google -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>


  <header id="aa-header">

        <!-- Inicio do menu superior -->
        <?php
          include "menu-superior.php"
        ?> 
        <!-- Fim do menu superior --> 
      
      
  <section id="aa-slider">
    <div class="aa-slider-area">
      <div id="sequence" class="seq">
        <div class="seq-screen">
          <ul class="seq-canvas">

            <li>
              <div class="seq-model">
                <img data-seq src="img/slider/bolinha.jpg" alt="Men slide img" />
              </div>
              <div class="seq-title">              
                <h2 data-seq>Piscina de bolinha</h2>                
                <p data-seq>Piscina de bolinha</p>
                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">Conferir</a>
              </div>
            </li>
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="img/slider/caminha.jpg" alt="Wristwatch slide img" />
              </div>
              <div class="seq-title">
               
                <h2 data-seq>Cama elástica</h2>                
                <p data-seq>Cama elástica</p>
                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">Conferir</a>
              </div>
            </li>
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="img/slider/castelo.jpg" alt="Women Jeans slide img" />
              </div>
              <div class="seq-title">                
                <h2 data-seq>Castelo inflável</h2>                
                <p data-seq>Castelo inflável</p>
                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">Conferir</a>
              </div>
            </li>
            <!-- single slide item -->           
            <li>
              <div class="seq-model">
                <img data-seq src="img/slider/maquina.jpg" alt="Shoes slide img" />
              </div>
              <div class="seq-title">                
                <h2 data-seq>Outros Equipamentos</h2>             
                <p data-seq>Máquina de algodão doce</p>
                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">Conferir</a>
              </div>
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
  <!-- / slider -->

  
    <!-- Products section -->
  <section id="aa-product">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-product-area">
              <div class="aa-product-inner">
                <!-- start prduct navigation -->
                 <ul class="nav nav-tabs aa-products-tab">
                    <li class="active"><a href="#men" data-toggle="tab">Brinquedos</a></li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <!-- Start men product category -->
                    <div class="tab-pane fade in active" id="men">
                      <ul class="aa-product-catg">
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"  ><img src="img/man/1.jpg" ></a>     
                            <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">Conferir</a>
                              <figcaption>
                              <h4 class="aa-product-title"><a href="#">Piscina de bolinha</a></h4>
                              <span class="aa-product-price">R$80.00</span>
                            </figcaption>
                          </figure>                        
                          
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/man/2.jpg" ></a>
                            <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">Conferir</a>
                             <figcaption>
                              <h4 class="aa-product-title"><a href="#">Cama elástica</a></h4>
                              <span class="aa-product-price">R$120.00</span>
                            </figcaption>
                          </figure>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/man/3.jpg" ></a>
                            
                            <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">Conferir</a>
                             <figcaption>
                              <h4 class="aa-product-title"><a href="#">Castelo inflável</a></h4>
                              <span class="aa-product-price">R$150.00</span>
                            </figcaption>
                          </figure>                         
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/man/carrinho.jpg" ></a>
                            <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">Conferir</a>
                            <figcaption>
      
                              <span class="aa-product-price">R$100.00</span>
                            </figcaption>
                          </figure>                          
                        </li> 
                          &nbsp                       
                      </ul>
                     
                    </div>
                    <!-- / men product category -->
                   
                  </div>
                  <!-- quick view modal -->                  
                  <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">                      
                        <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <div class="row">
                            <!-- Modal view slider -->
                            <div class="col-md-6 col-sm-6 col-xs-12">                              
                              <div class="aa-product-view-slider">                                
                                <div class="simpleLens-gallery-container" id="demo-1">
                                  <div class="simpleLens-container">
                                      <div class="simpleLens-big-image-container">
                                          <a class="simpleLens-lens-image" data-lens-image="img/view-slider/large/polo-shirt-1.png">
                                              <img src="img/view-slider/medium/polo-shirt-1.png" class="simpleLens-big-image">
                                          </a>
                                      </div>
                                  </div>
                                  <div class="simpleLens-thumbnails-container">
                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                         data-lens-image="img/view-slider/large/polo-shirt-1.png"
                                         data-big-image="img/view-slider/medium/polo-shirt-1.png">
                                          <img src="img/view-slider/thumbnail/polo-shirt-1.png">
                                      </a>                                    
                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                         data-lens-image="img/view-slider/large/polo-shirt-3.png"
                                         data-big-image="img/view-slider/medium/polo-shirt-3.png">
                                          <img src="img/view-slider/thumbnail/polo-shirt-3.png">
                                      </a>

                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                         data-lens-image="img/view-slider/large/polo-shirt-4.png"
                                         data-big-image="img/view-slider/medium/polo-shirt-4.png">
                                          <img src="img/view-slider/thumbnail/polo-shirt-4.png">
                                      </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- Modal view content -->
                            
                          </div>
                        </div>                        
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- / quick view modal -->              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Products section -->


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