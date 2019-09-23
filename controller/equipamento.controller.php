<?php

include_once('model/equipamento.php');

$equi = new Equipamento();

if (isset($_REQUEST["acao"])) {
    
    switch ($_REQUEST["acao"]) {
        case 'cadastrar_equi':
    
        $equi->Nome = $_POST['txtnomeEquipamento'];
        $equi->Descricao = $_POST['txtdescricao'];
        $equi->Preco = $_POST['txtpreco'];

        $equi->Cadastrar();

        echo "<script>alert('funfou')</script>";


        break;
        
        
        
        
        
        
        
    }
}
?>