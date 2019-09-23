<?php
class Equipamento
{

    

    private $CodEquipamento;
    private $Nome;
    private $Descricao;
    private $DataDisponivel;//é chave  estrangeira
    private $Preco;

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

    function Cadastrar(){
        $comandoSQL = "INSERT INTO Equipamento(Nome,Descricao,Preco)
                            VALUES(?,?,?)";

        $valores = array($this->Nome,
                         $this->Descricao,
                         $this->Preco);

        $exec = $this->con->prepare($comandoSQL);
        $exec->execute($valores);
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