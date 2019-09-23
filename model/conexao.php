<?php
class Conexao{

     

    function Conectar(){
        $con = new PDO (
            "mysql:host=localhost;dbname=brinquedosfesta;charset=utf8",
            'root',
            "");

            //$con->exec("set names utf8");//resolver o problema dos caracteres
            //$con->exec("SET CHARACTER SET utf8");//resolver o problema dos caracteres
        
           
            return $con;
    }
}
?>