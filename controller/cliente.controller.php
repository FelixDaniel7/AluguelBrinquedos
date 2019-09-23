<?php
include_once("model/cliente.php");

$cli = new Cliente();

/*function limpaCPF($valor){
    $valor = trim($valor);
    $isso = array('.','-');
    $aquilo = array('');
    return str_replace($isso, $aquilo, $valor);
}*/

if (isset($_REQUEST["acao"])) 
{
    switch ($_REQUEST["acao"]) {
        case 'cadastrar_cli':
        
        $cli->cpf = $_POST["txtcpf"];
        $cli->nome = $_POST["txtnome"];
        $cli->telefone = $_POST["txttelefone"];
        $cli->email = $_POST["txtemail"];
        $cli->senha = sha1(md5($_POST["txtsenha"]));
        $cli->endereco = $_POST["txtendereco"];
        
        $cli->Cadastrar();

        echo "<script>
             alert('Cadastro efetuado com SUCESSO!');
            window.location='account.php'
            </script>";
        break;

        case 'login_cli':
            
        $login = $_POST['txtlogin'];
        $senhalogin = sha1(md5($_POST['txtsenhalogin']));

        $user = $cli->Login($login,$senhalogin);//select no BD

        if ($user == true) {
            header('location:aluguel.php');
        }
        else {
            echo "<script>alert('Dados de login incorretos')</script>";
        }
        
        break;
    }
}
?>