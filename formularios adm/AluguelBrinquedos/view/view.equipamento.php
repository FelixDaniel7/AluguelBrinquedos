<!-- vai estar na pagina de admin -->
<?php include_once('../controller/equipamento.controller.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Cadastrar Brinquedo</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Jquery -->
    <script src="../js/jquery-3.4.1.min.js"></script>
    <!-- Ajax -->
    <script src="../ajax/equipamento.ajax.js"></script>
    <!-- Alertas Bonitinhos -->
    <script src="../js/sweetalert.js"></script>

    <!-- datatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  </head>
  <body>

  

 
    

<div class="container">
<div class="row justify-content-md-center">
    <div class="row">
    <div class="col-lg-12">
        <div class="row justify-content-md-center">
        <h2 class="linha">HOME</h2>
        
        </div>
        <div class="box">
        <div class="row">
            <div  class="box-title"><h3>Equipamentos</h3></div>
            <div class="text-right">
            <button type="button" class="btn btn-light btn-dark btn-sm"  id="btn_cadastra"><h6>Cadastrar Equipamento</h6></button>
            </div>
        </div>   
            <div class="box-content nopadding">
                <table id="tabela_equipamento" class="table table-striped">
                    <thead class="thead-dark">
                        <tr >
                            <th scope="col">Cod</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Preço</th>
                            <th scope="col" width="200">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    <?php
                    if($certo = $equi->ConsultarEquipamento()){
                    foreach($certo as $value):

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
                            <?php

                        endforeach;
                    }
                    else{
                    ?>
                       <td colspan="5" align="center"><?php echo "Nenhum registro"; ?></td>
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
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="modal_equipamento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                <!--o conteudo q esta na pagina painel.controller.php passa pelo metodo post para o jquery exibindo aq-->
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
    $('#tabela_equipamento').DataTable()
    </script>
  </body>
</html>