<?php
include_once("../model/pedido.php");

$ped = new Pedido();

$acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);

    switch($acao){

        case 'cadastrar_ped':

            /*

	
    CodCliente SMALLINT NOT NULL,
    DataPedido DATETIME, -- hora do envio do pedido 
    
    
    
    PrecoFinal DECIMAL(8,2),-- preço com o frete
    
    Status BIT, -- saber se o pedido ja foi realizado 
    Supervisao BIT,-- se tem supervisor adiciona tanto no preço
  */
            

            $Nome = filter_input(INPUT_POST, 'txtnome', FILTER_SANITIZE_STRING);
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
            $Data_Hora_Montagem = filter_input(INPUT_POST, 'txthoraMontagem' , FILTER_SANITIZE_STRING);
            $FormaPagamento = filter_input(INPUT_POST, 'txtformaPagamento' , FILTER_SANITIZE_STRING);
            $Supervisao = filter_input(INPUT_POST, 'txtsupervisao' , FILTER_SANITIZE_NUMBER_INT);


            $ped->CodCliente = 1;
            $ped->DataPedido = $DataPedido; // atribui valor a variavel privat eda class pedido






            // if (empty($Nome) || empty($Celular) || empty($Email) || empty($CPF)) {
            //     echo "vazio_form_pessoais";
            // }
            
            
            if($ped->CadastrarPedido()){
                echo true;
            }
        break;

        /*case 'consultar_ped':

        foreach($ped->ConsultarPedido() as $value):

        ?>
        <tr>
            <td><?php echo $value->CodPedido;?></td>
            <td><?php echo $value->EnderecoMontagem;?></td>
            <td><?php echo $value->PrecoFinal;?></td>
            <td><?php echo $value->FormaPagamento;?></td>
            <td>   
                <button type="button" id="btn_editar" value="<?php echo $value->CodPedido; ?>"class="btn btn-outline-success">
                     Editar
                </button>

                <button type="button" id="btn_excluir" value="<?php echo $value->CodPedido; ?>" class="btn btn-outline-danger">
                     Excluir
                </button>
            </td>
        </tr>
        <?php

        endforeach;
        break;*/

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
                <input type="date" name="Data_Hora_Montagem" value="<?php echo $dados->Data_Hora_Montagem ?>">
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
            $ped->Data_Hora_Montagem = filter_input(INPUT_POST, 'Data_Hora_Montagem', FILTER_SANITIZE_STRING);
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