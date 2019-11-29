<?php
include_once("../controller/carrinho.controller.php");
include_once("../model/bd.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Piscina De Bolinhas</title>

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
</div>


  

  <!-- Bootstrap core JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 
  
</body>
</html>



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
        <table class="table table-bordered">
        <thead>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Preço</th>
                    <th>Subtotal</th>
                    <th></th>
                </thead>
                <tbody>

                <?php
                $total = 0;
                    foreach ($_SESSION["codproduto"] as $indice => $valor):

                        $total += $_SESSION["quantidade"][$indice] * 
                        $produtos[$valor]["preco"];
                        $subtotal = $produtos[$valor]["preco"] * $_SESSION["quantidade"][$indice];
                ?>
                    
                    <tr>
                        <td><?php echo $produtos[$valor]["nomeproduto"];?></td>
                        <td><?php echo $_SESSION["quantidade"][$indice];?></td>
                        <td><?php echo number_format($produtos[$valor]["preco"],2,',','.');?></td>
                        <td><?php echo number_format($subtotal,2,',','.');?></td>
                        <td><a href="?acao=del&codproduto=<?php echo $indice;?>" class="btn btn-danger btn-sm">Excluir</a></td>
                    </tr>

                <?php endforeach; ?>
                </tbody>
            </table>
            <?php echo "<h2>TOTAL: R$ ".number_format($total,2,",",".")."</h2>"; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Finalizar pedido</button>
      </div>
    </div>
  </div>
</div>

