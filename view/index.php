<?php 
include_once("../controller/equipamento.controller.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Home - Aluguel Briquedos</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/landing-page.min.css" rel="stylesheet">
  <link href="css/css.css" rel="stylesheet">

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body>

  <?php include_once("menu/menu-superior.php");?>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/Menu/castelo.jpg" alt="Primeiro Slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>Brinquedoooooooooooooo</h5>
            <p>AAAAAAAAAAAAAAAAAAAAAAAAAAAAAA</p>
          <button type="button" class="btn btn-primary btn-lg">
            Conferir
          </button>
        </div>
    </div>
  <div class="carousel-item">
    <img class="d-block w-100" src="img/Menu/caminha.jpg" alt="Segundo Slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Brinquedoooooooooooooo</h5>
          <p>AAAAAAAAAAAAAAAAAAAAAAAAAAAAAA</p>
        <button type="button" class="btn btn-primary btn-lg">
          Conferir
        </button>
      </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/Menu/bolinha.jpg" alt="Terceiro Slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>Brinquedoooooooooooooo</h5>
          <p>AAAAAAAAAAAAAAAAAAAAAAAAAAAAAA</p>
          <button type="button" class="btn btn-primary btn-lg">Conferir</button>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Próximo</span>
    </a>
  </div>


<section class="features-icons bg-light text-center" >
  <h2>Brinquedos</h2>
  <hr>
  <div class="container-fluid">
    <div class="row"><!--essa-->
      <div class="card-deck">
        <?php foreach($equi->ConsultarEquipamento() as $value): ?>
        <div class="col-md-3"><!-- essa -->
          <div class="card" style="height: 40rem;">
            <img class="card-img-top" src="img/produtos/<?php echo $value->Imagem;?>" alt="Imagem Equipamento">
            <div class="card-body">
              <h5 class="card-title"><?php echo $value->Nome;?></h5>
              <p class="card-text"><?php echo $value->Descricao;?></p>
            </div>
            <div class="card-footer">
              <a href="Pag_Equipamento.php?CodEquipamento=<?php echo $value->CodEquipamento;?>" class="btn btn-primary btn-sm" tabindex="-1" role="button">Conferir</a>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div> 
    </div>
  </div>
</section>

<!-- 
    <section class="features-icons bg-light text-center" >
        <h5>Brinquedos</h5>
        <hr>
      <div class="container">
        <div class="row">
            <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="img/produtos/CamaElastica/1.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                  <h5 class="card-title">Cama elástica</h5>
                  <p class="card-text">A cama elástica é sempre o brinquedo mais querido e procurado nas festas e não há criança que não goste de passar horas pulando e brincando sem parar, por isso, é um brinquedo ideal para buffets, condomínios, clubes, casas e hotéis. </p>
                </div>
                <div class="card-footer">
                <a href="Cama_Elastica.php" class="btn btn-primary btn-sm" tabindex="-1" role="button">Conferir</a>
                </div>
              </div>


              <div class="card">
                <img class="card-img-top" src="img/produtos/PiscinaBolinhas/1.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                  <h5 class="card-title">Piscina de bolinhas</h5>
                  <p class="card-text">Uma festa infantil não é uma festa sem uma piscina de bolinhas, ela é um item indispensável que vai encantar as crianças e deixar a festa muito mais divertida!</p>
                </div>
                <div class="card-footer">
                <a href="Piscina_Bolinhas.php" class="btn btn-primary btn-sm" tabindex="-1" role="button">Conferir</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="img/produtos/MaquinaAlgodão/1.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                  <h5 class="card-title">Máquina de Algodão Doce</h5>
                  <p class="card-text">Uma Máquina de Algodão Doce é um acessório indispensável para deixar uma festinha infantil ainda mais divertida para as crianças, até mesmo para os adultos. Aqui na Magia Brinquedos nós temos modelos de alta qualidade, fácil manejo e transporte e com preços incríveis. Confira os nosso produtos!</p>
                </div>
                <div class="card-footer">
                <a href="Castelo_Inflavel.php" class="btn btn-primary btn-sm" tabindex="-1" role="button">Conferir</a>
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
    </section> -->


  <!-- Icons Grid -->
  <section class="features-icons bg-light text-center" style="background:url('img/Menu/bolinha.jpg')"">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-screen-desktop m-auto text-black"></i>
            </div>
            <h3>Praticidade</h3>
            <p class="lead mb-0">Alugue seu brinquedo em apenas alguns cliques!</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="fa fa-truck m-auto text-black"></i>
            </div>
            <h3>Entrega rapida</h3>
            <p class="lead mb-0">Entrega rápida e no dia agendado!</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="fas fa-lock m-auto text-black"></i>
            </div>
            <h3>Brinquedos Seguros</h3>
            <p class="lead mb-0">Brinquedos revisados frequentemente para uma maior segurança!</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include_once("menu/menu-inferior.php"); ?>
</body>
</html>