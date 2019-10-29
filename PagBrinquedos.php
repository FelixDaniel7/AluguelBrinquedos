<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Pagina Brinquedo</title>
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
    <link href="css/style.css" rel="stylesheet">    
    <!-- Fonte do Google -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
  </head>
  <body>  
    <body> 
       
     <header id="aa-header">
       <!-- Inicio do menu superior -->
       <?php
          include "menu-superior.php"
        ?> 
        <!-- Fim do menu superior --> 
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
 
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="img/fashion/FundoPagBrinquedos.jpg" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Piscina de Bolinhas</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Inicio</a></li>         
          <li><a href="#">Produtos</a></li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <section id="aa-product-details">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-product-details-area">
            <div class="aa-product-details-content">
              <div class="row">
                <!-- Modal view slider -->
                <div class="col-md-5 col-sm-5 col-xs-12">                              
                  <div class="aa-product-view-slider">                                
                    <div id="demo-1" class="simpleLens-gallery-container">
                      <div class="simpleLens-container">
                        <div class="simpleLens-big-image-container"><a data-lens-image="img/view-slider/large/polo-shirt-1.png" class="simpleLens-lens-image"><img src="img/view-slider/medium/polo-shirt-1.png" class="simpleLens-big-image"></a></div>
                      </div>
                      <div class="simpleLens-thumbnails-container">
                          <a data-big-image="img/view-slider/medium/polo-shirt-1.png" data-lens-image="img/view-slider/large/polo-shirt-1.png" class="simpleLens-thumbnail-wrapper" href="#">
                            <img src="img/view-slider/thumbnail/polo-shirt-1.png">
                          </a>                                    
                          <a data-big-image="img/view-slider/medium/polo-shirt-3.png" data-lens-image="img/view-slider/large/polo-shirt-3.png" class="simpleLens-thumbnail-wrapper" href="#">
                            <img src="img/view-slider/thumbnail/polo-shirt-3.png">
                          </a>
                          <a data-big-image="img/view-slider/medium/polo-shirt-4.png" data-lens-image="img/view-slider/large/polo-shirt-4.png" class="simpleLens-thumbnail-wrapper" href="#">
                            <img src="img/view-slider/thumbnail/polo-shirt-4.png">
                          </a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal view content -->
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <div class="aa-product-view-content">
                    <h3>Piscina de bolinhas</h3>
                    <div class="aa-price-block">
                      <span class="aa-product-view-price">R$ 00.00</span>
                    </div>
                    <p>Pule de montão com a galerinha da bagunça yeahhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh!!!!!!!!!!!</p>
                    
                    <div class="aa-prod-quantity">
                      <p class="aa-prod-category">
                        Categoria: <a href="#">Brinquedos</a>
                      </p>
                    </div>
                    <div class="aa-prod-view-bottom">
                    <input type="submit" name="Enviar" class="aa-browse-btn">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="aa-product-details-bottom">
              <ul class="nav nav-tabs" id="myTab2" >
                <li><a>Descrição</a></li>              
              </ul>
              
              <div class="tab-content">
                <div class="tab-pane fade in active" id="description">
                  <center>
                      <p>Descrição do produto</p>           
                  </center>
                  </div>
                <div class="tab-pane fade " id="review">
                 
                </div>            
              </div>
            </div>
            <!-- Produtos relacionados -->
<center>
            <div class="aa-product-related-item">
              <h3>Produtos relacionados</h3>
              <ul class="aa-product-catg aa-related-item-slider">
                <li>
                  <figure>
                      <a class="aa-product-img" href="#"><img src="img/man/carrinho.jpg" ></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Alugar</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Máquina de algodão doce</a></h4>
                              <span class="aa-product-price">R$100.00</span>
                            </figcaption>
                  </figure>                     
                </li>
                 <!-- start single product item -->
                <li>
                    <figure>
                        <a class="aa-product-img" href="#"><img src="img/man/3.jpg" ></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Alugar</a>
                             <figcaption>
                              <h4 class="aa-product-title"><a href="#">Castelo inflável</a></h4>
                              <span class="aa-product-price">R$150.00</span>
                            </figcaption>
                    </figure>  
                </li>
                <!-- start single product item -->
                <li>
                    <figure>
                        <a class="aa-product-img" href="#"><img src="img/man/2.jpg" ></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Alugar</a>
                             <figcaption>
                              <h4 class="aa-product-title"><a href="#">Cama elástica</a></h4>
                              <span class="aa-product-price">R$120.00</span>
                            </figcaption>
                    </figure>  
                </li>
                                                                           
              </ul>
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
          </center>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / product category -->

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