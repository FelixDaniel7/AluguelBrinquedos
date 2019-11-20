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
</head>

<body style="background-color: cornflowerblue; ">

  <!-- Navigation -->
  <?php

  include_once ("view/menu/menu-superior.php");

  ?>

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
        <h5>Brinquedos</h5>
        <hr>
      <div class="container">
        <div class="row">
            <div class="card-deck">
                <div class="card">
                  <img class="card-img-top" src="img/brinquedos/3.jpg" alt="Imagem de capa do card">
                  <div class="card-body">
                    <h5 class="card-title">Título do card</h5>
                    <p class="card-text">Este é um card maior com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional. Este conteúdo é um pouco maior, para demonstração.</p>
                  </div>
                  <div class="card-footer">
                      <small class="text-muted">Imagens meramente ilustrativas</small>
                  </div>
                </div>
                <div class="card">
                  <img class="card-img-top" src="img/brinquedos/2.jpg" alt="Imagem de capa do card">
                  <div class="card-body">
                    <h5 class="card-title">Título do card</h5>
                    <p class="card-text">Este é um card com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional.</p>
                  </div>
                  <div class="card-footer">
                      <small class="text-muted">Imagens meramente ilustrativas</small>
                  </div>
                </div>
                <div class="card">
                  <img class="card-img-top" src="img/brinquedos/1.jpg" alt="Imagem de capa do card">
                  <div class="card-body">
                    <h5 class="card-title">Título do card</h5>
                    <p class="card-text">Este é um card maior com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional. Este card tem o conteúdo ainda maior que o primeiro, para mostrar a altura igual, em ação.</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Imagens meramente ilustrativas</small>
                  </div>
                </div>
              </div>
        </div>
      </div>
    </section>


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
  <!-- Footer -->
  <?php 
  include "menu/menu-inferior.php";
  ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <div class="modal" id="modalCarrinho" tabindex="-1" role="dialog"aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Carrinho rápido</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table table-bordered text-light">
              <thead class="text-center bg-primary  ">
                <th>Imagem</th>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Valor</th>
                <th>Acão</th>
              </thead>
              <tbody>
                <tr>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                  <td class="text-center"><a href="" class="fas fa-ban"></a></td>
                </tr>
              </tbody>
            </table>
            <table class="table table-bordered">
            <thead>
                <th class="text-right">Total: R$ 00,00</th>  
              </thead>
              </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary">Finalizar pedido</button>
          </div>
        </div>
      </div>
  </div>
</body>
</html>





