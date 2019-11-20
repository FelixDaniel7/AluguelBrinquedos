<?php

class Pedido
{
    private $CodPedido;
    private $CodCliente;
    private $CodUsuario;
    private $CodSupervisor;
    private $EnderecoMontagem;
    private $DataPedido;
    private $Data_de_uso;
    private $HorasAlugado;
    private $Data_Hora_Montagem;
    private $PrecoFinal;
    private $FormaPagamento;

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
        $comandoSQL = "INSERT INTO pedido(CodCliente,CodUsuario,CodSupervisor,
        EnderecoMontagem,DataPedido,Data_de_uso,
        HorasAlugado,Data_Hora_Montagem,PrecoFinal,FormaPagamento)
                            VALUES(?,?,?,?,?,?,?,?,?,?)";

        $exec = $this->con->prepare($comandoSQL);
        $exec->bindValue(1,$this->CodCliente,PDO::PARAM_STR);
        $exec->bindValue(2,$this->CodUsuario,PDO::PARAM_STR);
        $exec->bindValue(3,$this->CodSupervisor,PDO::PARAM_STR);
        $exec->bindValue(4,$this->EnderecoMontagem,PDO::PARAM_STR);
        $exec->bindValue(5,$this->DataPedido,PDO::PARAM_STR);
        $exec->bindValue(6,$this->Data_de_uso,PDO::PARAM_STR);
        $exec->bindValue(7,$this->HorasAlugado,PDO::PARAM_STR);
        $exec->bindValue(8,$this->Data_Hora_Montagem,PDO::PARAM_STR);
        $exec->bindValue(9,$this->PrecoFinal,PDO::PARAM_STR);
        $exec->bindValue(10,$this->FormaPagamento,PDO::PARAM_STR);
        $exec->execute();

        if ($exec->rowCount() > 0) {
            return true;
        }else{
            return false;
        }
    }

    function ConsultarPedido(){
        $comandoSQL = " SELECT * FROM pedido";

        $exec = $this->con->prepare($comandoSQL);
        $exec->execute();

        $dados = array();

        foreach ($exec->fetchAll() as $value) {
            
            $ped = new Pedido();

            $ped->CodPedido = $value['CodPedido'];
            $ped->CodCliente = $value['CodCliente'];
            $ped->CodUsuario = $value['CodUsuario'];
            $ped->CodSupervisor = $value['CodSupervisor'];
            $ped->EnderecoMontagem = $value['EnderecoMontagem'];
            $ped->DataPedido = $value['DataPedido'];
            $ped->Data_de_uso = $value['Data_de_uso'];
            $ped->HorasAlugado = $value['HorasAlugado'];
            $ped->Data_Hora_Montagem = $value['Data_Hora_Montagem'];
            $ped->PrecoFinal = $value['PrecoFinal'];
            $ped->FormaPagamento = $value['FormaPagamento'];

            $dados[] = $ped;
        }
        return $dados;
    }

    function RetornarDados($CodPedido){
        $comandoSQL = "SELECT * FROM pedido WHERE CodPedido = ?";

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
            $comandoSQL = "UPDATE pedido
                            SET CodCliente =?,
                            CodUsuario =?,
                            CodSupervisor =?,
                            EnderecoMontagem =?, 
                            DataPedido = ?, 
                            Data_de_uso = ?, 
                            HorasAlugado = ?,
                            Data_Hora_Montagem = ?,
                            PrecoFinal = ?,
                            FormaPagamento = ?
                            WHERE CodPedido = ?";

            $exec = $this->con->prepare($comandoSQL);
            $exec->bindValue(1,$this->CodCliente,PDO::PARAM_STR);
            $exec->bindValue(2,$this->CodUsuario,PDO::PARAM_STR);
            $exec->bindValue(3,$this->CodSupervisor,PDO::PARAM_STR);
            $exec->bindValue(4,$this->EnderecoMontagem,PDO::PARAM_STR);
            $exec->bindValue(5,$this->DataPedido,PDO::PARAM_STR);
            $exec->bindValue(6,$this->Data_de_uso,PDO::PARAM_STR);
            $exec->bindValue(7,$this->HorasAlugado,PDO::PARAM_STR);
            $exec->bindValue(8,$this->Data_Hora_Montagem,PDO::PARAM_STR);
            $exec->bindValue(9,$this->PrecoFinal,PDO::PARAM_STR);
            $exec->bindValue(10,$this->FormaPagamento,PDO::PARAM_STR);
            $exec->bindValue(11,$this->CodPedido,PDO::PARAM_INT);
            $exec->execute();

            if ($exec->rowCount() > 0) {
                return true;
            }else{
                return false;
            }
    }

    function ExcluirPedido(){
        $comandoSQL = "DELETE FROM pedido WHERE CodPedido = ?";

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