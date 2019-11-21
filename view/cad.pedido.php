<?php 
//formulario de cadastro de pedido e dados do cliente 



include_once('../controller/pedido.controller.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Pedido e dados do cliente</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script type="text/JavaScript" src="../ajax/pedido.ajax.js"></script>
    <script src="../js/sweetalert.js"></script>
  </head>
  <body>

    <form action="" method="post" class="form" name="form_cad_pedido">
        Endereço
        <input type="text" name="EnderecoMontagem"><br>
        Data do pedido
        <input type="date" name="DataPedido"><br>
        Data de uso
        <input type="date" name="Data_de_uso"><br>
        Quantidade de horas alugado
        <input type="number" name="HorasAlugado"><br>
        Data de montagem
        <input type="date" name="Data_Hora_Montagem"><br>
        PrecoFinal
        <input type="number" name="PrecoFinal"><br>
        Forma de pagamento
        <input type="text" name="FormaPagamento"><br>

        <button type="submit">
            Realizar pedido
        </button>
    </form>

     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>