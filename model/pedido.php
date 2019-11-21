<?php

class Pedido
{
    private $CodPedido;

    private $CPF;
    private $Nome;
    private $Email;
    private $Celular;
    private $CEP;
    private $Endereco;
    private $Numero;
    private $Bairro;
    private $Complemento;

    private $DataPedido;
    private $Data_de_uso;
    private $HorasAlugado;
    private $Data_Hora_Montagem;
    private $PrecoFinal;
    private $FormaPagamento;
    Private $Status;
    private $Supervisao;

/*

	CodPedido INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    CodCliente SMALLINT NOT NULL,
    DataPedido DATETIME, -- hora do envio do pedido 
    Data_de_uso DATE, -- 1970-12-31
    HorasAlugado DOUBLE,  -- Quantidade de horas de aluguel,aluguel cobrado por hora
    Data_Hora_Montagem DATETIME, -- 1970-01-01 00:00:00
    PrecoFinal DECIMAL(8,2),-- preço com o frete
    FormaPagamento VARCHAR(20),
    Status BIT, -- saber se o pedido ja foi realizado 
    Supervisao BIT,-- se tem supervisor adiciona tanto no preço
    
    CONSTRAINT FK_Cliente_Pedido FOREIGN KEY (CodCliente)
		REFERENCES Cliente(CodCliente)*/

    function __get($atributo)
    {
        return $this->$atributo;
    }
    function __set($atributo,$value)
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

    function CadastrarPedido(){
        $comandoSQL = "INSERT INTO Pedido(CPF,Nome,Email,Celular,
        CEP,Endereco,Numero,Bairro,Complemento,DataPedido,Data_de_uso
        ,HorasAlugado,Data_Hora_Montagem,PrecoFinal,FormaPagamento,Status,Supervisao)
                            VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        $exec = $this->con->prepare($comandoSQL);
        $exec->bindValue(1,$this->CPF,PDO::PARAM_STR);
        $exec->bindValue(2,$this->Nome,PDO::PARAM_STR);
        $exec->bindValue(3,$this->Email,PDO::PARAM_STR);
        $exec->bindValue(4,$this->Celular,PDO::PARAM_STR);
        $exec->bindValue(5,$this->CEP,PDO::PARAM_STR);
        $exec->bindValue(6,$this->Endereco,PDO::PARAM_STR);
        $exec->bindValue(7,$this->Numero,PDO::PARAM_STR);
        $exec->bindValue(8,$this->Bairro,PDO::PARAM_STR);
        $exec->bindValue(9,$this->Complemento,PDO::PARAM_STR);

        
        $exec->bindValue(10,$this->DataPedido,PDO::PARAM_STR);
        $exec->bindValue(11,$this->Data_de_uso,PDO::PARAM_STR);
        $exec->bindValue(12,$this->HorasAlugado,PDO::PARAM_STR);
        $exec->bindValue(13,$this->Data_Hora_Montagem,PDO::PARAM_STR);
        $exec->bindValue(14,$this->PrecoFinal,PDO::PARAM_STR);
        $exec->bindValue(15,$this->FormaPagamento,PDO::PARAM_STR);
        $exec->bindValue(16,$this->Status,PDO::PARAM_INT);
        $exec->bindValue(17,$this->Supervisao,PDO::PARAM_STR);
        $exec->execute();

        if ($exec->rowCount() > 0) {
            return true;
        }else{
            return false;
        }
    }

    function ConsultarPedido(){
        try{
            $comandoSQL = " SELECT * FROM Pedido";

            $exec = $this->con->prepare($comandoSQL);
                $exec->execute();

            if ($exec->rowCount() > 0) {
                return $exec->fetchAll(PDO::FETCH_OBJ);//retorna todos como objeto
            } else {
                return false;
            }

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function RetornarDados($CodPedido){
        $comandoSQL = "SELECT * FROM Pedido WHERE CodPedido = ?";

        $exec = $this->con->prepare($comandoSQL);
        $exec->bindValue(1,$CodPedido,PDO::PARAM_INT);
        $exec->execute();

        if ($exec->rowCount() > 0) {

        return $exec->fetch(PDO::FETCH_OBJ);
        }
        else{
            return false;
        }

    }

    function AtualizarPedido(){
            $comandoSQL = "UPDATE Pedido
                            SET CodCliente = ?,
                            DataPedido = ?,
                            Data_de_uso = ?
                            ,HorasAlugado = ?
                            ,Data_Hora_Montagem = ?
                            ,PrecoFinal = ?,
                            FormaPagamento = ?
                            ,Status = ?,
                            Supervisao = ?
                            WHERE CodPedido = ?";

            $exec = $this->con->prepare($comandoSQL);
            $exec->bindValue(1,$this->CodCliente,PDO::PARAM_INT);
            $exec->bindValue(2,$this->DataPedido,PDO::PARAM_STR);
            $exec->bindValue(3,$this->Data_de_uso,PDO::PARAM_STR);
            $exec->bindValue(4,$this->HorasAlugado,PDO::PARAM_STR);
            $exec->bindValue(5,$this->Data_Hora_Montagem,PDO::PARAM_STR);
            $exec->bindValue(6,$this->PrecoFinal,PDO::PARAM_STR);
            $exec->bindValue(7,$this->FormaPagamento,PDO::PARAM_STR);
            $exec->bindValue(8,$this->Status,PDO::PARAM_INT);
            $exec->bindValue(9,$this->Supervisao,PDO::PARAM_STR);
            $exec->bindValue(10,$this->CodPedido,PDO::PARAM_INT);
            $exec->execute();

            if ($exec->rowCount() > 0) {
                return true;
            }else{
                return false;
            }
    }

    function ExcluirPedido(){
        $comandoSQL = "DELETE FROM Pedido WHERE CodPedido = ?";

        $exec = $this->con->prepare($comandoSQL);
        $exec->bindValue(1,$this->CodPedido,PDO::PARAM_INT);
        $exec->execute();

        if ($exec->rowCount() > 0) {
            return true;
        }
        else{
            return false;
        }
    }
}
?>