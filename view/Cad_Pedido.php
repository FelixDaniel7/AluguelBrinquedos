<?php 
//formulario de cadastro de pedido e dados do cliente 
include_once('../controller/pedido.controller.php'); 
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

  <!-- Jquery -->
  <script src="../js/jquery-3.4.1.min.js"></script>
    <!-- Ajax -->
    <script src="../ajax/pedido.ajax.js"></script>
    <!-- Alertas Bonitinhos -->
    <script src="../js/sweetalert.js"></script>
</head>
<body style="background-color: cornflowerblue;">
    

  <?php include_once("menu/menu-superior.php"); ?>

<center>
  <section class="features-icons bg-light">
    <div class="container">
      <div class="col-md-6 col-sm-6">
        <form name="form_cad_cliente_pedido" calss="features-icons bg-light text-center "method="POST">    
          <section id="pessoais">

            <h3>Informações Pessoais</h3>
          
            <div>&nbsp;</div>
            <label for="Text" class="text-rigth">Nome <span>*</span></label>
            <input type="text" class="form-control" name="txtnome" id="txtnome" placeholder="Alfredo">
            
            <div>&nbsp;</div>
            <label for="Text">Telefone <span>(Opcional)</span></label>
            <input type="number" class="form-control" name="txttelefone" id="txttelefone" placeholder="(11)3333-9999">
            
            <div>&nbsp;</div>
            <label for="Text">Celular <span>(Opcional)</span></label>
            <input type="number" class="form-control" name="txtcelular" id="txtcelular" placeholder="(11)98888-9999">
            
            <div>&nbsp;</div>
            <label for="inputEmail4">Email <span>*</span></label>
            <input type="email" class="form-control" name="txtemail" id="txtemail" placeholder="Email" >
            
            <div>&nbsp;</div>
            <label for="inputCPF">CPF <span>*</span></label>
            <input type="text" class="form-control" name="txtcpf" id="txtcpf">
            
            <div>&nbsp;</div>
            <button type="button" id="proximo" class="btn btn-primary">Proximo</button>

        </section>

        <section id="montagem" style="display: none">

          <h3>Local da Montagem</h3>

          <label for="Text"> CEP <span>*</span></label>
          <input type="number" class="form-control" name="txtcep" id="txtcep" placeholder="Informe seu CEP">

          <label for="Text">Endereço <span>*</span></label>
          <input type="text" class="form-control" name="txtendereco" id="txtendereco" placeholder="Rua da Florinda">

          <label for="inputEmail4">Bairro <span>*</span></label>
          <input type="text" class="form-control" name="txtbairro" id="txtbairro" placeholder="Vila do chaves">


          <label for="inputCPF">Numero</label> <span>*</span></label>
          <input type="number" class="form-control" name="txtnumero" id="txtnumero" placeholder="725" >

          <label for="inputEmail4">Complemento <span>(Opcional)</span></label>
          <input type="text" class="form-control" name="txtcomplemento" placeholder="Do lado do barril">

          <div>
          &nbsp;
          </div>


          <button type="button" class="btn btn-primary" id="anterior">Anterior</button>
          <button type="button"  class="btn btn-primary" id="proximo">Proximo</button>

      </section>

      <section id="pedido" style="display: none">

        <h3>Dados do Pedido</h3>

        <label for="Text"> Data de uso <span>*</span></label>
        <input type="date" class="form-control" name="txtdataUso" id="txtdataUso" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" min="2019-11-07" max="2022-12-31" >

        <label for="Text">Horas de utilização <span>*</span></label>
        <input type="number" class="form-control" name="txthorasAlugado" id="txthorasAlugado" maxlength="2" >

        <label for="inputEmail4">Hora de Montagem <span>*</span></label>
        <input type="time" class="form-control" name="txthoraMontagem" id="txthoraMontagem" >

        <label for="Text">Forma de pagamento<span>*</span></label>
        <select class="custom-select" name="txtformaPagamento" id="txtformaPagamento" >
          <option value="Dinheiro">Dinheiro</option>
          <option value="Cartão">Cartão</option>
        </select>

        <label for="Text">Supervisão<span>*</span></label>
        <select class="custom-select" name="txtsupervisao" >
          <option value="0">Sem Supervisão</option>
          <option value="1">Com Supervisão</option>
        </select>

        <h4>Brinquedos escolhidos</h4>

        <div class="container">
          <div class="row">
            <div class="card-deck">
            <div class="card">
              <img class="card-img-top" src="img/produtos/CamaElastica/1.jpg" alt="Imagem de capa do card">
              <div class="card-footer">
                <a href="Cama_Elastica.php" class="btn btn-primary btn-sm" tabindex="-1" role="button">Conferir</a>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="img/produtos/PiscinaBolinhas/1.jpg" alt="Imagem de capa do card">
              <div class="card-footer">
                <a href="Cama_Elastica.php" class="btn btn-primary btn-sm" tabindex="-1" role="button">Conferir</a>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="img/produtos/MaquinaAlgodão/1.jpg" alt="Imagem de capa do card">
              <div class="card-footer">
                <a href="Cama_Elastica.php" class="btn btn-primary btn-sm" tabindex="-1" role="button">Conferir</a>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="img/produtos/CasteloInflavel/1.jpg" alt="Imagem de capa do card">
              <div class="card-footer">
                <a href="Cama_Elastica.php" class="btn btn-primary btn-sm" tabindex="-1" role="button">Conferir</a>
              </div>
            </div>
            </div>
          </div>
        </div>
        <div>
        &nbsp;
        </div>
        <button type="button" class="btn btn-primary"  id="anterior">Anterior</button>
        <button type="submit" class="btn btn-primary">Enviar</button>

      </section>
  </form>
</center>
  </div>
  </section>
  <?php include_once("menu/menu-inferior.php"); ?>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
