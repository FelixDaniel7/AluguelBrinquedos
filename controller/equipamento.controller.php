<?php 
/*tudo relacionado aos equipamentos
cadastro 
update
delete
*/
include_once('../model/equipamento.php');

$equi = new Equipamento();/*Instancia do objeto da classe para poder usar as funçoes da classe*/

$acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);


    switch ($acao) {
        
        case 'cadastrar_equi':

            //$CodEquipamento = filter_input(INPUT_POST, 'CodEquipamento', FILTER_SANITIZE_NUMBER_INT);
    
            $equi->Nome = filter_input(INPUT_POST, 'txtnomeEquipamento', FILTER_SANITIZE_STRING);
            $equi->Descricao = $_POST['txtdescricao'];
            $equi->Preco = filter_input(INPUT_POST, 'txtpreco', FILTER_SANITIZE_STRING);//DOUBLE
            $equi->Peso = $_POST['txtpeso'];
            $equi->Altura = $_POST['txtaltura'];
            $equi->Comprimento = $_POST['txtcomprimento'];
            $equi->Largura = $_POST['txtlargura'];

            $equi->CadastrarEquipamento();
            break;

        case 'consultar_equi':/*DADOS para preencher a tabela com os equipamentos*/
        
            foreach($equi->ConsultarEquipamento() as $value):

            ?>
                <tr>
                    <td><?php echo $value->CodEquipamento;?></td>
                    <td><?php echo $value->Nome;?></td>
                    <td><?php echo $value->Descricao;?></td>
                    <td><?php echo $value->Preco;?></td>
                    <td>
                        
                        <button type="button" id="btn_editar" value="<?php echo $value->CodEquipamento; ?>"class="btn btn-outline-primary">
                            Editar
                        </button>

                        <button type="button" id="btn_excluir" value="<?php echo $value->CodEquipamento; ?>" class="btn btn-outline-danger">
                            Excluir
                        </button>
                
                    </td>
                </tr>
            <?php
            
            endforeach;
            break;

        case 'form_editar_equi':/*Formulario Preenchido com os dados para EDIÇÂO*/

            $CodEquipamento = filter_input(INPUT_POST, 'CodEquipamento', FILTER_SANITIZE_NUMBER_INT);

            $dados = $equi->RetornarDados($CodEquipamento);//pegando o retorno do metodo e colocando na variavel $equi
            ?>
                <form method="post" class="form" name="form_editar_equipamento">
                    Nome
                    <input type="text" name="txtnomeEquipamento" value="<?php echo $dados->Nome;?>"><br>
                    Descricao
                    <input type="text" name="txtdescricao" value="<?php echo $dados->Descricao;?>"><br>
                    Peso
                    <input type="number" step="0.01" name="txtpeso" value="<?php echo $dados->Peso;?>"><br>
                    Altura
                    <input type="number" name="txtaltura" value="<?php echo $dados->Altura;?>"><br>
                    Comprimento
                    <input type="number" name="txtcomprimento" value="<?php echo $dados->Comprimento;?>"><br>
                    Largura
                    <input type="number" name="txtlargura" value="<?php echo $dados->Largura;?>"><br>
                    Preço
                    <input type="number" step="0.01" name="txtpreco" value="<?php echo $dados->Preco;?>"><br>

                    <button type="submit">
                        Atualizar Equipamento 
                    </button>
                </form>

            <?php
            break;

        case 'excluir_equi':
            $equi->CodEquipamento = filter_input(INPUT_POST, 'CodEquipamento', FILTER_SANITIZE_NUMBER_INT);

            if($equi->ExcluirEquipamento()){
                echo 'deletou';
            }
            break;
    }
?>