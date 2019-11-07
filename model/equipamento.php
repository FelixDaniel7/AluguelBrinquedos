<?php
class Equipamento
{
    private $CodEquipamento;
    private $Nome;
    private $Descricao;
    private $Peso;
    private $Altura;
    private $Comprimento;
    private $Largura;
    private $Preco;
/*
    CodEquipamento INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Nome VARCHAR(20),
    Descricao VARCHAR(100),
    Peso DECIMAL(4,2),
    Altura DECIMAL(4,2),
    Comprimento DECIMAL(4,2),
    Largura DECIMAL(4,2),
    Preco DECIMAL(8,2)
*/
    //get e set 
    function __get($atributo)
    {
        return $this->$atributo;
    }
    function __set($atributo,$value)
    {
        $this->$atributo = $value;    
    }

    //conectar como BD
    private $con;
    /**
     * Class constructor.
     */
    function __construct()
    {
        include_once("conexao.php");
        $classe_con = new Conexao();
        $this->con = $classe_con->Conectar();
       
    }

    /*bindValue e PDO::PARAM_ serve para enviar cada tipo de dado de forma correta ao banco.
    Garante q o banco receba o parametro desejado*/
    function CadastrarEquipamento(){
        $comandoSQL = "INSERT INTO Equipamento(Nome,Descricao,Peso,Altura,Comprimento,Largura,Preco)
                            VALUES(?,?,?,?,?,?,?)";

        $exec = $this->con->prepare($comandoSQL);
        $exec->bindValue(1,$this->Nome,PDO::PARAM_STR);
        $exec->bindValue(2,$this->Descricao,PDO::PARAM_STR);
        $exec->bindValue(3,$this->Peso,PDO::PARAM_STR);
        $exec->bindValue(4,$this->Altura,PDO::PARAM_STR);
        $exec->bindValue(5,$this->Comprimento,PDO::PARAM_STR);
        $exec->bindValue(6,$this->Largura,PDO::PARAM_STR);
        $exec->bindValue(7,$this->Preco,PDO::PARAM_STR);
        $exec->execute();

        if ($exec->rowCount() > 0) {
            return true;
        }else{
            return false;
        }

/*
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
        }*/
    }

    function ConsultarEqui(){
        $comandoSQL = " SELECT * FROM Equipamento ";

        $exec = $this->con->prepare($comandoSQL);
        $exec->execute();

        $dados = array();

        foreach ($exec->fetchAll() as $value) {
            
            $equi = new Equipamento();

            $equi->CodEquipamento   = $value['CodEquipamento'];
            $equi->Nome             = $value['Nome'];
            $equi->Descricao        = $value['Descricao'];
            $equi->Preco            = $value['Preco'];
            //$equi->DataDisponivel   = $value['DataDisponivel'];


            $dados[] = $equi;
        }
        return $dados;
    }
}
?>