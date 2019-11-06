<?php 
/*tudo relacionado aos equipamentos
cadastro 
update
delete
*/
ob_start();


include_once('../model/equipamento.php');

$equi = new Equipamento();

$acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);


    switch ($acao) {
        
        case 'cadastrar_equi':
    
        $equi->Nome = $_POST['txtnomeEquipamento'];
        $equi->Descricao = $_POST['txtdescricao'];
        $equi->Preco = $_POST['txtpreco'];

        $equi->Cadastrar();

        echo "funfou";

        break;
        
        
        
        
        
        
        
    }
    ob_end_flush();
?>