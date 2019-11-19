<!-- vai estar na pagina de admin -->
<?php include_once('../controller/usuario.controller.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Cadastrar Usuario</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Jquery -->
    <script src="../js/jquery-3.4.1.min.js"></script>
    <!-- Ajax -->
    <script src="../ajax/usuario.ajax.js"></script>
    <!-- Alertas Bonitinhos -->
    <script src="../js/sweetalert.js"></script>
    <!-- datatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  </head>
  <body>


  
    <button type="button" id="btn_cadastra_usu">Cadastrar Usuario</button> 

    <div class="row">
    <div class="col-lg-9">
        <h2 class="linha">Usuários</h2>
        <div class="box">
            <div class="box-title">Usuarios</div>
            <div class="box-content nopadding">
                <table id="tabela_usuario" class="table display text-center">
                    <thead>
                        <tr>
                            <th>Cod</th>
                            <th>Nome</th>
                            <th>Login</th>
                            <th>Email</th>
                            <th>Tipo de Conta</th>
                            <th width="200">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    if($certo = $usu->ConsultarUsuario()){
                        foreach($certo as $value):

                    ?>
                        <tr>
                            <td><?php echo $value->CodUsuario;?></td>
                            <td><?php echo $value->Nome;?></td>
                            <td><?php echo $value->Login;?></td>
                            <td><?php echo $value->Email;?></td>
                            <td><?php echo $value->Tipo;?></td>
                            
                            <td>
                            <button type="button" id="btn_editar" value="<?php echo $value->CodUsuario; ?>"class="btn btn-outline-primary">
                            Editar
                            </button>
                            <button type="button" id="btn_excluir" value="<?php echo $value->CodUsuario; ?>" class="btn btn-outline-danger">
                            Excluir
                            </button>
                            </td>

                        
                    <?php

                        endforeach;
                    }
                    else{
                    ?>
                       <td><?php echo "Nenhum registro"; ?></td>
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
<div class="modal fade" id="modal_usuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    $('#tabela_usuario').DataTable()
    </script>
  </body>
</html>