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
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Jquery -->
    <script src="../js/jquery-3.4.1.min.js"></script>
    <!-- Ajax -->
    <script src="../ajax/equipamento.ajax.js"></script>
    <!-- Alertas Bonitinhos -->
    <script src="../js/sweetalert.js"></script>
    <!-- emojis -->
    <link href="css/emoji-css.css" rel="stylesheet">

    <!-- datatable -->
    <link href="css/jquery.dataTables.min.css">
  </head>
  <body>

  <br>
    <button type="button" id="btn_cadastra" class="btn btn-dark">Cadastrar Equipamento</button> 

    <div class="row">
    <div class="col-lg-9">
        <h2 class="linha">HOME</h2>
        <div class="box">
            <div class="box-title">Equipamentos</div>
            <div class="box-content nopadding">
                <table id="tabela_equipamento" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Cod</th>
                            <th>Nome</th>
                            <th>Imagem</th>
                            <th>Preço</th>
                            <th>Editar/Excluir</th>
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
                            <td><?php echo $value->Imagem;?></td>
                            <td><?php echo $value->Preco;?></td>
                            <td>
                                <button type="button" id="btn_editar" value="<?php echo $value->CodEquipamento; ?>"class="btn btn-outline-warning">
                                    <i class="em em-pencil"></i>
                                </button>
                                <button type="button" id="btn_excluir" value="<?php echo $value->CodEquipamento; ?>" class="btn btn-outline-danger">
                                    <i class="em em-x"></i>
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
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <!-- datatable -->
    <script type="text/javascript" charset="utf8" src="../js/jquery.dataTables.min.js"></script>

    
    <script>
    $('#tabela_equipamento').DataTable()
    </script>
  </body>
</html>