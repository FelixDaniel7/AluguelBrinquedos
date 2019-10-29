<?php
include_once("model/aluguel.php");

$alu = new Aluguel();

if(isset($_REQUEST["acao"])){
    switch($_REQUEST["acao"]){
        case 'cadastrar_alu':
            $alu->Data_de_uso = $_POST["Data_de_uso"];
            $alu->HorasAlugado = $_POST["HorasAlugado"];
            $alu->EnderecoMontagem = $_POST["EnderecoMontagem"];
            $alu->Data_Hora_Montagem = $_POST["Data_Hora_Montagem"];
            $alu->Data_Hora_Desmontagem = $_POST["Data_Hora_Desmontagem"];
            $alu->FormaPagamento = $_POST["FormaPagamento"];
            
            $alu->CadastrarAluguel();

            echo "<script>
                  alert('Dados gravados com sucesso!');
                  window.location='aluguel.php';
                  </script>";
            break;
    }

}
?>