<?php
include_once("../model/pedido.php");

$ped = new Pedido();

$acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);

    switch($acao){

        case 'cadastrar_ped':
            
            $ped->CodCliente = filter_input(INPUT_POST, 'CodCliente', FILTER_SANITIZE_NUMBER_INT);
            $ped->CodUsuario = filter_input(INPUT_POST, 'CodUsuario', FILTER_SANITIZE_NUMBER_INT);
            $ped->CodSupervisor = filter_input(INPUT_POST, 'CodSupervisor', FILTER_SANITIZE_NUMBER_INT);
            $ped->EnderecoMontagem = filter_input(INPUT_POST, 'EnderecoMontagem', FILTER_SANITIZE_STRING);
            $ped->DataPedido = filter_input(INPUT_POST, 'DataPedido', FILTER_SANITIZE_STRING);
            $ped->Data_de_uso = filter_input(INPUT_POST, 'Data_de_uso', FILTER_SANITIZE_STRING);
            $ped->HorasAlugado = filter_input(INPUT_POST, 'HorasAlugado', FILTER_SANITIZE_STRING);
            $ped->Data_Hora_Montagem = filter_input(INPUT_POST, 'Data_Hora_Montagem', FILTER_SANITIZE_STRING);
            $ped->PrecoFinal = filter_input(INPUT_POST, 'PrecoFinal', FILTER_SANITIZE_STRING);
            $ped->FormaPagamento = filter_input(INPUT_POST, 'FormaPagamento', FILTER_SANITIZE_STRING);

            $ped->CadastrarPedido();
        break;

        case 'consultar_ped':

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
        break;

        case 'form_editar_ped':
            $CodPedido = filter_input(INPUT_POST, 'CodPedido', FILTER_SANITIZE_NUMBER_INT);
            $dados = $ped->RetornarDados($CodPedido);

        ?>

            <form method="post" class="form" name="form_editar_pedido">
                <input type="hidden" name="CodPedido" value="<?php echo $dados->CodPedido; ?>">
                <input type="hidden" name="CodCliente" value="<?php echo $dados->CodCliente; ?>">
                <input type="hidden" name="CodUsuario" value="<?php echo $dados->CodUsuario; ?>">
                <input type="hidden" name="CodSupervisor" value="<?php echo $dados->CodSupervisor; ?>">
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
            $ped->CodCliente = filter_input(INPUT_POST, 'CodCliente', FILTER_SANITIZE_NUMBER_INT);
            $ped->CodUsuario = filter_input(INPUT_POST, 'CodUsuario', FILTER_SANITIZE_NUMBER_INT);
            $ped->CodSupervisor = filter_input(INPUT_POST, 'CodSupervisor', FILTER_SANITIZE_NUMBER_INT);
            $ped->EnderecoMontagem = filter_input(INPUT_POST, 'EnderecoMontagem', FILTER_SANITIZE_STRING);
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