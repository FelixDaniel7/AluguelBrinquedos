<?php
ob_start(); session_start();
require '../funcoes/banco/conexao.php';
require '../funcoes/login/login.php';
require '../funcoes/crud/crud.php';
//sleep(1);//tirar o sleep depois por causa da conexao como servidor
$acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);

switch ($acao) {
    case 'login':
        
        //faz interracçao
        $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);        
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

        if (Login($login,$senha)){
            // cria a sessao
            $_SESSION['administrador'][] = PegaLogin($login);
            echo "blaaaa";
        }else{
            $dados = PegaLogin($login);
            //echo $dados->nome;
            if (empty($login) || empty($senha)) {//verificando campos em branco
                echo 'vazio';//vazio
            }
            else if (!$dados) {
                echo 'naoexiste';//nao existe
            }
            else if ($dados->senha != md5(strrev($senha))){//verificando a senha no BD
                echo 'diferentesenha';
            }
            else if($dados->nivel > 2){//moderador e o super admin se o nivel for maior q 2 ela nao tem permissao
                echo 'nivel';
            }
        }
        break;

        case 'cadastro':
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);        
            $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
            $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);        
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $nivel = filter_input(INPUT_POST, 'nivel', FILTER_SANITIZE_STRING);        

            if (Cadastro($nome,$login,$email,$senha,$nivel)) {//cadastro da crud
                echo "cadastrou";//manda para jquery para exibir a mensagem
            }else{
                echo "erro";//manda para jquery para exibir a mensagem
            }
        
        break;
    
    default:
    echo "erro";
        break;
}
ob_end_flush();
//sleep(1);
//echo "Retornou";
//echo $_POST['login'];