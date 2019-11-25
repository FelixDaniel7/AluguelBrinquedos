<?php
include_once("../model/pedido.php");
$ped = new Pedido();

//carrinho - se a sessao não exixtir eu crio ela
session_start();
//session_destroy();
if(!isset($_SESSION["CodEquipamento"]))
{
    $_SESSION["CodEquipamento"] = array();
    $_SESSION["quantidade"] = array();
}


$consulta = $ped->con->prepare("SELECT * FROM Equipamento");
$consulta->execute();

$linhas = $consulta -> rowCount();

foreach($consulta as $mostra):

$produtos;

$produtos[$mostra["CodEquipamento"]]["nomeproduto"] = $mostra["Nome"];
$produtos[$mostra["CodEquipamento"]]["preco"] = $mostra["Preco"];

endforeach;

$acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);

    switch($acao){

        case 'add_carrinho':

            if(!in_array($_POST['CodEquipamento'], $_SESSION["CodEquipamento"])){
                $_SESSION["CodEquipamento"][] = $_POST['CodEquipamento'];
                $_SESSION["quantidade"][] = 1;
                echo 'adicionou'; 
                }
                else
                {
                    echo "repetido";
                }
            break;

            case 'del_carrinho':
                $CodEquipamento = $_POST["CodEquipamento"];
                unset($_SESSION["CodEquipamento"][$CodEquipamento]);
                unset($_SESSION["quantidade"][$CodEquipamento]);
                echo 'deleotu';
            break;


            case 'consultar_carrinho':
                ?>
                <table id="tabela_carrinho" class="table table-bordered">
                <thead>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Preço</th>
                <th>Subtotal</th>
                <th></th>
                </thead>
                <tbody>
                <?php
                ///var_dump($_SESSION);
                $total = 0;
                foreach ($_SESSION["CodEquipamento"] as $indice => $valor):

                $total += $_SESSION["quantidade"][$indice] * 
                $produtos[$valor]["preco"];
                $subtotal = $produtos[$valor]["preco"] * $_SESSION["quantidade"][$indice];
                ?>

                <tr>
                <td><?php echo $produtos[$valor]["nomeproduto"];?></td>
                <td><?php echo $_SESSION["quantidade"][$indice];?></td>
                <td><?php echo number_format($produtos[$valor]["preco"],2,',','.');?></td>
                <td><?php echo number_format($subtotal,2,',','.');?></td>
                <td><button type="button" id="btn_excluir_carrinho" value="<?php echo $indice;?>" class="btn btn-danger btn-sm">Excluir</button></td>
                </tr>

                <?php endforeach; ?>
                </tbody>
                </table>
                <?php echo "<h2>TOTAL: R$ ".number_format($total,2,",",".")."</h2>"; ?>
            
            <?php 
                break;
    
            case 'finalizar_compra':
                //cadastrar compra retornando o código da compra gerado
                foreach ($_SESSION["codproduto"] as $indice => $valor):
                    //código para enviar itens 
                    echo "gravou o produto de código $valor com a quantidade ".$_SESSION["quantidade"][$indice];
                endforeach;
            break;

        case 'cadastrar_ped':

            $Nome = filter_input(INPUT_POST, 'txtnome', FILTER_SANITIZE_STRING);
            $Telefone = filter_input(INPUT_POST, 'txttelefone' , FILTER_SANITIZE_STRING);
            $Celular = filter_input(INPUT_POST, 'txtcelular' , FILTER_SANITIZE_STRING);
            $Email = filter_input(INPUT_POST, 'txtemail' , FILTER_SANITIZE_EMAIL);
            $CPF = filter_input(INPUT_POST, 'txtcpf' , FILTER_SANITIZE_STRING);

            $CEP = filter_input(INPUT_POST, 'txtcep' , FILTER_SANITIZE_STRING);
            $Endereco = filter_input(INPUT_POST, 'txtendereco' , FILTER_SANITIZE_STRING);
            $Numero = filter_input(INPUT_POST, 'txtnumero' , FILTER_SANITIZE_STRING);
            $Bairro = filter_input(INPUT_POST, 'txtbairro' , FILTER_SANITIZE_STRING);
            $Complemento = filter_input(INPUT_POST, 'txtcomplemento' , FILTER_SANITIZE_STRING);

            date_default_timezone_set('America/Sao_Paulo');
            $DataPedido = date('Y-m-d H:i:s');
            $Data_de_uso = filter_input(INPUT_POST, 'txtdataUso' , FILTER_SANITIZE_STRING);
            $HorasAlugado = filter_input(INPUT_POST, 'txthorasAlugado' , FILTER_SANITIZE_STRING);
            $Hora_Montagem = filter_input(INPUT_POST, 'txthoraMontagem' , FILTER_SANITIZE_STRING);
            $FormaPagamento = filter_input(INPUT_POST, 'txtformaPagamento' , FILTER_SANITIZE_STRING);
            $Supervisao = filter_input(INPUT_POST, 'txtsupervisao' , FILTER_SANITIZE_NUMBER_INT);


            
            // atribui valor a variavel privat eda class pedido
            $ped->Nome = $Nome;
            $ped->Telefone = $Telefone;
            $ped->Celular = $Celular;
            $ped->Email = $Email;
            $ped->CPF = $CPF;

            $ped->CEP = $CEP;
            $ped->Endereco = $Endereco;
            $ped->Numero = $Numero;
            $ped->Bairro = $Bairro;
            $ped->Complemento = $Complemento;

            $ped->DataPedido = $DataPedido;
            $ped->Data_de_uso = $Data_de_uso;
            $ped->HorasAlugado = $HorasAlugado;            
            $ped->Hora_Montagem = $Hora_Montagem;
            $ped->FormaPagamento = $FormaPagamento;
            $ped->Supervisao = $Supervisao;

            $ped->Status = 'Pendente'; 


            //cadastrar os brinquedos tambem

            
            if($ped->CadastrarPedido()){
                echo 'cadastrou_pedido';
            }
        break;

        case 'form_editar_ped':
            $CodPedido = filter_input(INPUT_POST, 'CodPedido', FILTER_SANITIZE_NUMBER_INT);
            $dados = $ped->RetornarDados($CodPedido);

        ?>

            <form method="post" class="form" name="form_editar_pedido">
                <input type="hidden" name="CodPedido" value="<?php echo $dados->CodPedido; ?>">
                Endereço
                <input type="text" name="EnderecoMontagem" value="<?php echo $dados->EnderecoMontagem; ?>">
                Data do Pedido
                <input type="date" name="DataPedido" value="<?php echo $dados->DataPedido; ?>">
                Data de uso
                <input type="date" name="Data_de_uso" value="<?php echo $dados->Data_de_uso ?>">
                Quantidade de horas alugado
                <input type="number" name="HorasAlugado" value="<?php echo $dados->HorasAlugado; ?>">
                Data de montagem
                <input type="date" name="Hora_Montagem" value="<?php echo $dados->Hora_Montagem ?>">
                Preço final
                <input type="number" name="PrecoFinal" value="<?php echo $dados->PrecoFinal; ?>">
                Forma de pagamento
                <input type="text" name="FormaPagamento" value="<?php echo $dados->FormaPagamento ?>">

                <button type="submit" id="btn_atualiza">
                    Atualizar pedido
                </button>
            </form>

        <?php
        break;

        case 'editar_ped':

            $ped->CodPedido = filter_input(INPUT_POST, 'CodPedido', FILTER_SANITIZE_NUMBER_INT);
            $ped->DataPedido = filter_input(INPUT_POST, 'DataPedido', FILTER_SANITIZE_STRING);
            $ped->Data_de_uso = filter_input(INPUT_POST, 'Data_de_uso', FILTER_SANITIZE_STRING);
            $ped->HorasAlugado = filter_input(INPUT_POST, 'HorasAlugado', FILTER_SANITIZE_STRING);
            $ped->Hora_Montagem = filter_input(INPUT_POST, 'Hora_Montagem', FILTER_SANITIZE_STRING);
            $ped->PrecoFinal = filter_input(INPUT_POST, 'PrecoFinal', FILTER_SANITIZE_STRING);
            $ped->FormaPagamento = filter_input(INPUT_POST, 'FormaPagamento', FILTER_SANITIZE_STRING);

            if($ped->AtualizarPedido()){
                echo 'atualizou';
            }
        break;

        case 'excluir_ped':
            $ped->CodPedido = filter_input(INPUT_POST, 'CodPedido', FILTER_SANITIZE_NUMBER_INT);

            if($ped->ExcluirPedido()){
                echo 'deletou';
            }
        break;
    }
?>