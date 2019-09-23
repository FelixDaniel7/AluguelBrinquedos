<?php

class Cliente{

    //atributos da classe
    //private $codcliente;
    private $cpf;
    private $nome;
    private $telefone;
    private $email;
    private $senha;
    private $endereco;

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

    //metodo cadastrar 
    function Cadastrar()
    {
        $comandoSQL = "INSERT INTO cliente(CPF,Nome,Telefone,Email,Senha,Endereco)
                            VALUES(?,?,?,?,?,?)";
        $valores = array($this->cpf,
                        $this->nome,
                        $this->telefone,
                        $this->email,
                        $this->senha,
                        $this->endereco);
        $exec = $this->con->prepare($comandoSQL);
        $exec->execute($valores);
    }

    //login
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