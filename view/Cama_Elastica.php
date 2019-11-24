<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Cama Elástica - Aluguel Briquedos</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/landing-page.min.css" rel="stylesheet">
  <link href="css/css.css" rel="stylesheet">
</head>

<body style="background-color: cornflowerblue; ">

  
  <?php
  include"menu/menu-superior.php";
  ?>

  <section class="features-icons bg-light text-center espaco-topo" >
      <h3>Brinquedos</h3>
      <hr>
    <div class="container">
        
      <div class="row">
        
          <div class="card-deck">
            
              <div class="card brinquedos" id="brinquedos">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="img/produtos/CamaElastica/1.jpg" alt="Primeiro Slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="img/produtos/CamaElastica/2.jpg" alt="Segundo Slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="img/produtos/CamaElastica/3.jpg" alt="Terceiro Slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Próximo</span>
                    </a>
                  </div>
                
                <div class="card-footer">
                    <small class="text-muted">Imagens do Produto</small>
                </div>
              </div>

              <div class="card">
                  <h5 class="card-header">Cama Elástica</h5>
                  <div class="card-body">
                    <h5 class="card-title">R$ 50,00
                      <br>
                        <a id="retorno">

                        </a>
                    </h5>
                    <p class="card-text">A cama elástica é sempre o brinquedo mais querido e procurado nas festas e não há criança que não goste de passar horas pulando e brincando sem parar, por isso, é um brinquedo ideal para buffets, condomínios, clubes, casas e hotéis. Aqui na Magia Brinquedos você encontra os mais variados e seguros modelos de cama elástica do mercado! Confira os nossos produtos!</p>
                    <a href="#" class="btn btn-primary">Alugar</a>
                    <div>
                      <br>
                    </div>
                  </div>
                  <hr>
                  <h5 class="card-header">
                    
                    <center>
                <div class="col-md-8 col-sm-8 ">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Calcular Frete</label>
                      <input type="text" class="form-control" id="cep" placeholder="Digite seu CEP baianor">
                        <small class="form-text text-muted"><a href="http://www.consultaenderecos.com.br/busca-endereco" target="_blank">Não sei meu CEP</a></small>
                  </div>
                </div>
                        <button onclick="calculo();" class="btn btn-primary" >Calcular</button>
                      </div>   
                  </h5>
                </center>   
                        
                     
                
            </div>
      </div>
    </div>

  </section>

  <section class="features-icons bg-light text-center espaco " >
      <h3>Recomendados</h3>
      <hr>
    <div class="container">
      <div class="row">     
          <div class="card-deck " >
          <div class="card">
                <img class="card-img-top" src="img/produtos/MaquinaAlgodão/1.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                  <h5 class="card-title">Máquina de Algodão Doce</h5>
                  <p class="card-text">Uma Máquina de Algodão Doce é um acessório indispensável para deixar uma festinha infantil ainda mais divertida para as crianças, até mesmo para os adultos. Aqui na Magia Brinquedos nós temos modelos de alta qualidade, fácil manejo e transporte e com preços incríveis. Confira os nosso produtos!</p>
                </div>
                <div class="card-footer">
                <a href="Maquina_Algodao.php" class="btn btn-primary btn-sm" tabindex="-1" role="button">Conferir</a>

                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="img/produtos/PiscinaBolinhas/1.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                  <h5 class="card-title">Piscina de bilonhas</h5>
                  <p class="card-text">Uma festa infantil não é uma festa sem uma piscina de bolinhas, ela é um item indispensável que vai encantar as crianças e deixar a festa muito mais divertida!</p>
                </div>
                <div class="card-footer">
                <a href="Piscina_Bolinhas.php" class="btn btn-primary btn-sm" tabindex="-1" role="button">Conferir</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="img/produtos/CasteloInflavel/1.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                  <h5 class="card-title">Castelo Infável</h5>
                  <p class="card-text">Brinquedos infláveis fazem a alegria da criançada em qualquer festa infantil, são brinquedos que chamam muito a atenção e proporcionam horas de muita diversão.</p>
                </div>
                <div class="card-footer">
                <a href="Castelo_Inflavel.php" class="btn btn-primary btn-sm" tabindex="-1" role="button">Conferir</a>
                </div>
              </div>
            </div>
      </div>
    </div>
  </section>


  

  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#">Sobre</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Contatos</a>
            </li>
           
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2019. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 
  <script>
    function calculo(){
      var cep = $("#cep").val();
      $.post('../calcula.php',{cep:cep},function(data){
        $("#retorno").html(data);
      });
    }
  </script>
</body>

</html>