<?php 
//pagina do admin colsultar editar e atualizar os pedidos 
include_once('../controller/pedido.controller.php'); ?>

<html lang="en">
  <head>
    <title>Pedido e dados do cliente</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <!-- Jquery -->
    <!-- Ajax -->
    <script src="../ajax/pedido.ajax.js"></script>
    <!-- Alertas Bonitinhos -->
    <script src="../js/sweetalert.js"></script>
    <!-- emojis -->
    <link href="css/emoji-css.css" rel="stylesheet">
    <!-- datatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  </head>
  <body>

    

<div class="row">
  <div class="col-lg-12 ml-auto">
  <h2 class="linha">Pedidos</h2>
        <div class="box">
            <div class="box-content nopadding">
                <table id="tabela_pedido" class="table display text-center">
        <thead>
          <tr>
            <th>cod</th>
            <th>Nome Cliente</th>
            <th>Data do Pedido</th>
            <th>Data de Utilização</th>
            <th>Horas Alugadas</th>
            <th>Horario da Montagem</th>
            <th>Preço final</th>
            <th>Forma de Pagamento</th>
            <th>Status</th>
            <th>Supervisao</th>
            <th width="200">Ação</th>
          </tr>
        </thead>
        <tbody>
        <?php
        if($certo = $ped->ConsultarPedido()){
        foreach($certo as $value):

        ?>
        <tr>
        <td><?php echo $value->CodPedido;?></td>
        <td><?php echo $value->Nome;?></td>
        <td><?php echo $value->DataPedido;?></td>
        <td><?php echo $value->Data_de_uso;?></td>
        <td><?php echo $value->HorasAlugado;?></td>
        <td><?php echo $value->Hora_Montagem;?></td>
        <td><?php echo $value->PrecoFinal;?></td>
        <td><?php echo $value->FormaPagamento;?></td>
        <td><?php echo $value->Status;?></td>
        <td>
        <?php 
        if($value->Supervisao == 1){
          echo 'Sem revisão';
        }
        else{
          echo 'Com Sepervisao';
        }
        ?>
        </td>
        
        <td>   
        <button type="button" id="btn_editar" value="<?php echo $value->CodPedido; ?>"class="btn btn-outline-success">
        <i class="em em-pencil"></i>
        </button>

        <button type="button" id="btn_excluir" value="<?php echo $value->CodPedido; ?>" class="btn btn-outline-danger">
          <i class="em em-x"></i>
        </button>
        </td>
        <?php

        endforeach;
        }
        else{
        ?>
        <td colspan="6" align="center"><?php echo "Nenhum registro"; ?></td>
        <?php
        }
        ?>
        </tr>
        </tbody>
      </table>
    </div>
    </div>
  </div>
</div>

    <div class="modal fade" id="modal_pedido" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cadastro</h5>
            <button type="button" class="close" data-dimiss="modal" aria-label="Fechar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            <div class="modal-body">
            </div>
        </div>
      </div>
    </div> 
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/popper.min.js"></script>
    <!-- datatable -->
    <script type="text/javascript" charset="utf8" src="../js/jquery.dataTables.min.js"></script>
    <script>
    $('#tabela_pedido').DataTable()
    </script>
  </body>
</html>