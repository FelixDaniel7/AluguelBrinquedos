<?php

class Aluguel{

    private $CodAluguel;
    private $CodCliente;
    private $CodEquipamento;
    private $CodSupervisao;
    private $DataAluguel;
    private $Data_de_uso;
    private $HorasAlugado;
    private $Data_Hora_Montagem;
    private $Hora_Desmontagem;
    private $EnderecoMontagem;
    private $PrecoFinal;
    private $FormaPagamento;

    function __get($atributo){
        return $this->$atributo;
    }

    function __set($atributo, $value)
    {
        $this->$atributo = $value;
    }

    private $con;
    function __construct()
    {
        include_once("conexao.php");
        $classe_con = new Conexao();
        $this->con = $classe_con->Conectar();
    }

    function CadastrarAluguel(){
        $comandoSQL = "INSERT INTO aluguel(Data_de_uso, HorasAlugado,
        EnderecoMontagem, Data_Hora_Montagem, FormaPagamento)
        VALUES(?,?,?,?,?)";
        $valores = array($this->Data_de_uso,
                         $this->HorasAlugado,
                         $this->EnderecoMontagem,
                         $this->Data_Hora_Montagem,
                         $this->FormaPagamento);
        $exec = $this->con->prepare($comandoSQL);
        $exec->execute($valores);
    }
    function Login($login,$senhalogin){
        $comandoSQL = "SELECT * FROM Cliente 
                        WHERE Email = '$login' AND Senha = '$senhalogin'"; 

        $exec = $this->con->prepare($comandoSQL);
        $exec->execute();

        $linhasafetadas = $exec->rowCount();
        //echo $linhasafetadas;

        if ($linhasafetadas > 0) {
            //echo "<script>alert('Funcionaaaaa');</script>";
            return true; 
        }
        else {
            //echo "<script>alert('Naaaaaao Funcionaaaaa');</script>";
            return false;
        }        
    }

}
?>