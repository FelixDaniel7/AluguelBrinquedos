<?php
session_start();//iniciar sessão
//criar variáveis de sessão (apenas se não exisitir)
//session_destroy();

if(!isset($_SESSION["codproduto"]))
{
    $_SESSION["codproduto"] = array();
    $_SESSION["quantidade"] = array();
}

if(isset($_GET["acao"]))
{
    switch($_GET["acao"])
    {
        case 'add':
            if(!in_array($_GET["codproduto"], $_SESSION["codproduto"])){
            $_SESSION["codproduto"][] = $_GET["codproduto"];
            $_SESSION["quantidade"][] = 1;
            header("location:Piscina_Bolinhas.php");
            }
            else
            {
                echo "<script>alert('Produto ja adicionado');</script>";
            }
        break;

        case 'del':
            $codproduto = $_GET["codproduto"];
            unset($_SESSION["codproduto"][$codproduto]);
            unset($_SESSION["quantidade"][$codproduto]);
            header("location:Piscina_Bolinhas.php");
        break;

        case 'finalizar_compra':
            //cadastrar compra retornando o código da compra gerado
            foreach ($_SESSION["codproduto"] as $indice => $valor):
                //código para enviar itens 
                echo "gravou o produto de código $valor com a quantidade ".$_SESSION["quantidade"][$indice];
            endforeach;
        break;
    }
}

?>