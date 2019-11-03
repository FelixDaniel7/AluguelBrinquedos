<?php
//constantes

define('HOST','localhost');
define('USUARIO','root');
define('SENHA','');
define('DB','brinquedosfesta');


//conexao
function Conecta(){
    $dns = "mysql:host=".HOST.";dbname=".DB;

    try{
        $con = new PDO($dns,USUARIO,SENHA);
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $con;
    }catch(PDOException $erro){
        echo $erro->getMessage();
    }
}