<?php
class Usuario
{
    private $CodUsuario;
    private $Nome;
    private $Email;
    private $Login;
    private $Senha;
    private $Tipo;

    /*
    CodUsuario SMALLINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Nome VARCHAR(50),
    Email VARCHAR(50),-- para recuperar senha
    Login VARCHAR(25),
    Senha VARCHAR(40),/*para criptografia
    Tipo ENUM('super','administrador','supervisor')
    */

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
        $classe_con = new Conexao;
        $this->con = $classe_con->Conectar();
    }

    /**CADASTRA*/
    function CadastrarUsuario(){
        //try{
            $comandoSQL = "INSERT INTO Usuario(Nome,Email,Login,Senha,Tipo) 
                            VALUES(?,?,?,?,?)";

            $exec = $this->con->prepare($comandoSQL);
            $exec->bindValue(1,$this->Nome,PDO::PARAM_STR);
            $exec->bindValue(2,$this->Email,PDO::PARAM_STR);
            $exec->bindValue(3,$this->Login,PDO::PARAM_STR_CHAR);
            $exec->bindValue(4,sha1(md5(strrev($this->Senha))),PDO::PARAM_STR_CHAR);//inverte a senha e criptografa duas vezes
            $exec->bindValue(5,$this->Tipo,PDO::PARAM_STR);
            $exec->execute();


            if($exec->rowCount() > 0){
                return true;
            }
            else{
                return false;
            }

        // }catch(PDOException $e){
        //     echo $e->getMessage();
        // }
    }

    function ConsultarUsuario(){
        try {
            $comandoSQL = "SELECT * FROM Usuario order by Nome";

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

    function RetornarDadosUsu($CodUsuario){
        $comandoSQL = "SELECT * FROM Usuario WHERE CodUsuario = ?";

        $exec = $this->con->prepare($comandoSQL);
        $exec->bindValue(1,$CodUsuario,PDO::PARAM_INT);
        $exec->execute();

        if ($exec->rowCount() > 0) {

        return $exec->fetch(PDO::FETCH_OBJ);
        }
        else{
            return false;
        }
    }

    function AtualizarUsuario(){//nao altera os privilegios

        $comandoSQL = "UPDATE Usuario 
                        SET Nome = ?,
                        Email = ?,
                        Login = ?,
                        Senha = ? 
                        WHERE CodUsuario = ?";

        $exec = $this->con->prepare($comandoSQL);
        $exec->bindValue(1,$this->Nome,PDO::PARAM_STR);
        $exec->bindValue(2,$this->Email,PDO::PARAM_STR);
        $exec->bindValue(3,$this->Login,PDO::PARAM_STR);
        $exec->bindValue(4,sha1(md5(strrev($this->Senha))),PDO::PARAM_STR); 
        $exec->bindValue(5,$this->CodUsuario,PDO::PARAM_INT);
        $exec->execute();

        if ($exec->rowCount() > 0) {
            return true;
        }else{
            return false;
        }
    }


    /*DELETE*/

    function ExcluirUsuario(){
        $comandoSQL = "DELETE FROM Usuario WHERE CodUsuario = ?";

        $exec = $this->con->prepare($comandoSQL);
        $exec->bindValue(1,$this->CodUsuario,PDO::PARAM_INT);
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