<?php

//verificar os dados do admin
//Função de login

function Login($login,$senha){
    $pdo = Conecta();    

    try{

        $logar = $pdo->prepare("SELECT * FROM administrador 
        WHERE login = ? AND senha = ? AND nivel <= '2'");

        $logar ->bindValue(1,$login, PDO::PARAM_STR);
        $logar ->bindValue(2,md5(strrev($senha)), PDO::PARAM_STR);
        $logar->execute();

        if ($logar->rowCount() == 1) {// ou o metodo fetchColumn() ,ou count($logar)
            return true;
        } else {
            return false;
        }
        
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}


//Pega login
function PegaLogin($login){
    $pdo = Conecta();    

    try{

        $bylogin = $pdo->prepare("SELECT * FROM administrador 
        WHERE login = ?");

        $bylogin ->bindValue(1,$login, PDO::PARAM_STR);
        $bylogin->execute();

        if ($bylogin->rowCount() == 1) { //ou  if($bylogin)
            //return $bylogin->fetch(PDO::FETCH_ASSOC);//$dados['nome do campo']
            return $bylogin->fetch(PDO::FETCH_OBJ);
        } else {
            return false;
        }
        
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}
//admin logado
function Logado($sessao){

    if (!isset($_SESSION[$sessao]) || empty($_SESSION[$sessao])) {// se nao existir a sessao
        header("location: index.php");
    } else {
        return true;
    }
    //verificar se o id da sessao é igual o do BD
}