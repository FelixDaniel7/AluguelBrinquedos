<?php 
//formulario de cadastro de pedido e dados do cliente 



include_once('../controller/pedido.controller.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Home - Aluguel Briquedos</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Jquery -->
    <script src="../js/jquery-3.4.1.min.js"></script>
    <!-- Ajax -->
    <script src="../ajax/pedido.ajax.js"></script>
    <!-- Alertas Bonitinhos -->
    <script src="../js/sweetalert.js"></script>
</head>


<div class="container bg-light text-center ">
<form name="form_cad_cliente_pedido" method="POST">    


<section id="pessoais">
  

    <h3>Informações Pessoais</h3>
    <label for="Text">Nome <span>*</span></label>
    <input type="text" class="form-control" name="txtnome" placeholder="Alfredo">

    <label for="Text">Celular <span>*</span></label>
    <input type="number" class="form-control" name="txtcelular" placeholder="(11)9999-9999">

    <label for="inputEmail4">Email <span>*</span></label>
    <input type="email" class="form-control" name="txtemail" placeholder="Email" >

    <label for="inputCPF">CPF <span>*</span></label>
    <input type="text" class="form-control" name="txtcpf">

    <button type="button" id="proximo">Proximo</button>

</section>

<section id="montagem" style="display: none">

    <h3>Local da Montagem</h3>

    <label for="Text"> CEP <span>*</span></label>
    <input type="number" class="form-control" name="txtcep" placeholder="Informe seu CEP">

    <label for="Text">Endereço <span>*</span></label>
    <input type="text" class="form-control" name="txtendereco" placeholder="Rua da Florinda">

    <label for="inputEmail4">Bairro <span>*</span></label>
    <input type="text" class="form-control" name="txtbairro" placeholder="Vila do chaves">


    <label for="inputCPF">Numero</label> <span>*</span></label>
    <input type="number" class="form-control" name="txtnumero" placeholder="725" >

    <label for="inputEmail4">Complemento <span>*</span></label>
    <input type="text" class="form-control" name="txtcomplemento" placeholder="Do lado do barril">

    
    <button type="button" id="anterior">Anterior</button>
    <button type="button" id="proximo">Proximo</button>

</section>

<section id="pedido" style="display: none">

    <h3>Dados do Pedido</h3>



    <label for="Text"> Data de uso <span>*</span></label>
    <input type="date" class="form-control" name="txtdataUso" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" min="2019-11-07" max="2022-12-31" >


    <label for="Text">Horas de utilização <span>*</span></label>
    <input type="number" class="form-control" name="txthorasAlugado" maxlength="2" >

    <label for="inputEmail4">Data e Hora de Montagem <span>*</span></label>
    <input type="datetime-local" class="form-control" name="txthoraMontagem" >
    <input type="datetime-local" name="" id="">



    <label for="Text">Forma de pagamento<span>*</span></label>
    <select class="custom-select" name="txtformaPagamento" >
      <option selected>Escolha...</option>
      <option value="Dinheiro">Dinheiro</option>
      <option value="Cartão">Cartão</option>
    </select>

    <label for="Text">Supervisão<span>*</span></label>
    <select class="custom-select" name="txtsupervisao" >
    <option value="0">Sem Supervisão</option>
      <option value="1">Com Supervisão</option>
    </select>

    <h4>Brinquedos escolhidos</h4>
    <input type="checkbox" name="txtpulapula" id="">Pula Pula <br>
    <input type="checkbox" name="txtcastelo" id="">Castelo <br>


    <button type="button" id="anterior">Anterior</button>

    <button type="submit" class="btn btn-primary">Enviar</button>
    
</section>

<br>

    
</form>
</div>
</body>
</html>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>