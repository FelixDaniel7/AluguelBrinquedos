<?php 
/*tudo relacionado aos equipamentos
cadastro 
update
delete
*/
//ob_start();
include_once('../model/equipamento.php');

$equi = new Equipamento();/*Instancia do objeto da classe para poder usar as funçoes da classe*/

$acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);


    switch ($acao) {
        
        case 'cadastrar_equi':
    
            $equi->Nome = $_POST['txtnomeEquipamento'];
            $equi->Descricao = $_POST['txtdescricao'];
            $equi->Preco = $_POST['txtpreco'];
            $equi->Peso = $_POST['txtpeso'];
            $equi->Altura = $_POST['txtaltura'];
            $equi->Comprimento = $_POST['txtcomprimento'];
            $equi->Largura = $_POST['txtlargura'];

            $equi->CadastrarEquipamento();
            break;

        case 'consultar_equi':
        
            foreach($equi->ConsultarEquipamento() as $value):

            ?>
                <tr>
                    <th><?php echo $value->CodEquipamento;?></th>
                    <th><?php echo $value->Nome;?></th>
                    <th><?php echo $value->Descricao;?></th>
                    <th width="200">Ação</th>
                </tr>
            <?php
            
            endforeach;
            break;
    }
//ob_end_flush();
?>