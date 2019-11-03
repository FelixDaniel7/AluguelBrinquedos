<?php
//delete update cadastro
//cadastro
function Cadastro($nome,$login,$email,$senha,$nivel){
    $pdo = Conecta();    

    try{

        $cadastro = $pdo->prepare("INSERT INTO administrador (nome,email,login,senha,nivel)
                        VALUES (?,?,?,?,?)");

        $cadastro ->bindValue(1,$nome, PDO::PARAM_STR);
        $cadastro ->bindValue(2,$email, PDO::PARAM_STR);
        $cadastro ->bindValue(3,$login, PDO::PARAM_STR);
        $cadastro ->bindValue(4,md5(strrev($senha)), PDO::PARAM_STR);
        $cadastro ->bindValue(5,$nivel, PDO::PARAM_STR);
        $cadastro ->execute();

        if ($cadastro->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
        
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}
?>