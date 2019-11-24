<?php include_once("../controller/equipamento.controller.php");

$CodEquipamento = filter_input(INPUT_GET, 'CodEquipamento', FILTER_SANITIZE_NUMBER_INT);

//if(isset($_REQUEST['CodEquipamento']))
if (!$certo = $equi->RetornarDados($CodEquipamento)):
    echo "<h1>Página não encontrada</h1>";
    include_once("erro.php");
else:
    foreach ($equi->RetornarDados($CodEquipamento) as $value):
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php echo $value->Nome;?> - Aluguel Briquedos</title>

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

<body>
<?php 


        include_once("menu/menu-superior.php");
?>

  <section class="features-icons bg-light text-center espaco-topo" >
      <h3>Brinquedo - <?php echo $value->Nome;?></h3>
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
                    <!-- <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="img/produtos/CasteloInflavel/1.jpg" alt="Primeiro Slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="img/produtos/CasteloInflavel/2.jpg" alt="Segundo Slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="img/produtos/CasteloInflavel/3.jpg" alt="Terceiro Slide">
                      </div>
                    </div> -->
                    <img class="" src="img/produtos/<?php echo $value->Imagem;?>" width="555" height="400" alt="Imagem Equipamento">
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
                  <h5 class="card-header"><?php echo $value->Nome;?></h5>
                  <div class="card-body">
                    <h5 class="card-title">R$ <?php echo $value->Preco;?>
                      <br>
                        <a id="retorno">

                        </a>
                    </h5>
                    <p class="card-text">
                    <?php echo $value->Descricao;?>
                    </p>
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


  <?php endforeach; ?>
<center>
<section class="features-icons bg-light text-center" >
<h3>Recomendados</h3>
  <hr>
  <div class="container-fluid">
    <div class="row"><!--essa-->
      <div class="card-deck">
        <?php foreach($equi->ConsultarDiferente($value->CodEquipamento) as $valor): ?>
        <div class="col-3"><!-- essa -->
          <div class="card" style="height: 40rem;">
            <img class="card-img-top" src="img/produtos/<?php echo $valor->Imagem;?>" width="30" height="180" alt="Imagem Equipamento">
            <div class="card-body">
              <h5 class="card-title"><?php echo $valor->Nome;?></h5>
              <p class="card-text"><?php echo $valor->Descricao;?></p>
            </div>
            <div class="card-footer">
              <a href="Pag_Equipamento.php?CodEquipamento=<?php echo $valor->CodEquipamento;?>" class="btn btn-primary btn-sm" tabindex="-1" role="button">Conferir</a>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

</center>


  <!-- <section class="features-icons bg-light text-center espaco " >
      <h3>Recomendados</h3>
      <hr>
    <div class="container">
      <div class="row">     
          <div class="card-deck " >
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
            </div>
      </div>
    </div>
  </section> -->


  <?php endif;?>

  <?php include_once("menu/menu-inferior.php");?>
  <!-- Bootstrap core JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>