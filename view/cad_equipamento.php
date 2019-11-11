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
    <script type="text/javascript" src="../ajax/equipamento.ajax.js"></script>
    <!-- Alertas Bonitinhos -->
    <script src="../js/sweetalert.js"></script>
  </head>
  <body>
  <button id="teste">testess</button>

  <script>

    $('#teste').click(function(){

        swal({
            //position: 'top',
            //className: "bg-light",
            title: "Você tem certeza ?",
            text: "Está ação ira deletar todos os dados desse equipamento",
            icon: "warning",
            buttons: ['Cancelar','Continuar'],
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                swal("Deletado com sucesso !", {
                icon: "success",
                });
            } 
            else {
                swal("Essa ação foi cancelada !",{
                    icon: "info"
                });
            }
        });

    });
    
  </script>

    


    <form action="" method="post" class="form" name="form_cad_equipamento">
        Nome
        <input type="text" name="txtnomeEquipamento"><br>
        Descricao
        <input type="text" name="txtdescricao"><br>
        Peso
        <input type="number" step="0.01" name="txtpeso"><br>
        Altura
        <input type="number" name="txtaltura"><br>
        Comprimento
        <input type="number" name="txtcomprimento"><br>
        Largura
        <input type="number" name="txtlargura"><br>
        Preço
        <input type="number" step="0.01" name="txtpreco"><br>

        <button type="submit">
            Cadastrar Equipamento
        </button>
    </form>

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
                            <th>Descrição</th>
                            <th>Preço</th>
                            <th width="200">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="5">
                            <img src="../img/load.gif" class="load" alt="Carregando..."/>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
  </body>
</html>