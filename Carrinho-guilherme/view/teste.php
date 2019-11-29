<?php
require_once "../model/bd.php";
include_once("../controller/carrinho.controller.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Início</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>

    <div class="row">

    <?php
    Carrinho();
        foreach ($produtos as $indice => $valor):
    ?>

        <div class="col col-sm-4 mt-3">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $valor["nomeproduto"];?></h5>
                    <p class="card-text">R$ <?php echo number_format($valor["preco"],2,',','.');?></p>
                    <a href="?acao=add&codproduto=<?php echo $indice;?>" class="btn btn-danger">Adicionar</a>
                </div>
            </div>
  
    <?php endforeach; ?>

    </div>
</div>


    
</body>
</html>