<?php 
//pagina do admin colsultar editar e atualizar os pedidos 
include_once('../controller/pedido.controller.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Pedido e dados do cliente</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Jquery -->
    <script src="../js/jquery-3.4.1.min.js"></script>
    <!-- Ajax -->
    <script src="../ajax/pedido.ajax.js"></script>
    <!-- Alertas Bonitinhos -->
    <script src="../js/sweetalert.js"></script>
    <!-- datatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  </head>
  <body>

    

<div class="row">
  <div class="col-lg-9">
    <br>
    <div class="box-title">Pedidos</div>
    <div class="box-content nopadding">
      <table id="tabela_pedido" class="table table-striped">
        <thead>
          <tr>
            <th>Cod.Pedido</th>
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
        <td><?php echo $value->Data_Hora_Montagem;?></td>
        <td><?php echo $value->PrecoFinal;?></td>
        <td><?php echo $value->FormaPagamento;?></td>
        <td><?php echo $value->Status;?></td>
        <td><?php echo $value->Supervisao;?></td>
        
        <td>   
        <button type="button" id="btn_editar" value="<?php echo $value->CodPedido; ?>"class="btn btn-outline-success">
        Editar
        </button>

        <button type="button" id="btn_excluir" value="<?php echo $value->CodPedido; ?>" class="btn btn-outline-danger">
        Excluir
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- datatable -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    
    <script>
    $('#tabela_pedido').DataTable()
    </script>
  </body>
</html>