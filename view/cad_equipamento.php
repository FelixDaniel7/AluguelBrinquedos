<?php include_once('../controller/equipamento.controller.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Cadastrar Brinquedo</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Jquery -->
    <script src="../js/jquery-3.4.1.min.js"></script>
    <!-- Ajax -->
    <script type="text/javascript" src="../ajax/equipamento.ajax.js"></script>
    <!-- Alertas Bonitinhos -->
    <script src="../js/sweetalert.js"></script>
  </head>
  <body>
  <button id="teste">testess</button>

  <script>

    $('#teste').click(function(){

      swal("Hello world!");

    });
    
  </script>

    


    <form action="" method="post" class="form" name="form_cad_equipamento">
        Nome
        <input type="text" name="txtnomeEquipamento"><br>
        Descricao
        <input type="text" name="txtdescricao"><br>
        Peso
        <input type="number" step="0.01" name="txtpeso"><br>
        Altura
        <input type="number" name="txtaltura"><br>
        Comprimento
        <input type="number" name="txtcomprimento"><br>
        Largura
        <input type="number" name="txtlargura"><br>
        Preço
        <input type="number" step="0.01" name="txtpreco"><br>

        <button type="submit">
            Cadastrar Equipamento
        </button>
    </form>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>