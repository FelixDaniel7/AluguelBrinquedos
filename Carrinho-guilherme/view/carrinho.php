<?php
include_once("../controller/carrinho.controller.php");
include_once("../model/bd.php");
var_dump($_SESSION['codproduto']);
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

<div class="container mt-3">
    <div class="row">

        <div class="col">

            <table class="table">
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
  
  
    </div>
</div>


    
</body>
</html>