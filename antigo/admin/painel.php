<?php
ob_start(); session_start();
require 'funcoes/banco/conexao.php';
require 'funcoes/login/login.php';
require 'funcoes/crud/crud.php';
Logado('administrador');//passando a sessao por parametro


if (isset($_GET['logout']) && $_GET['logout'] == 'true') {
    session_destroy();
    header("location: index.php");
}


// if (Cadastro('Leandro','lele','lenadro@gmail.com','123','2')) {
//     echo "Cadastrou";
// } else {
//     echo "Erro ao cadastrar";
// }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin com PDO</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Importando o css do bootstrap antigo -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>

        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">HOME ADMIN</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Clientes <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Cadastrar</a></li>
                            </ul>
                        </li>
                    </ul>

                    <p class="pull-right logout">
                    	Bem Vindo: SEU NOME &nbsp
                        <a href="?logout=true" class="btn btn-danger">Sair</a>
                    </p>

                </div><!-- /.navbar-collapse -->
            </div>
        </nav>

        <div class="container">
           <div class="row">
                <div class="col-lg-9">
                  <!--   <h2 class="linha">HOME</h2>
                    <div class="box">
                        <div class="box-title">Administradores</div>
                        <div class="box-content nopadding">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>E-mail</th>
                                        <th>Login</th>
                                        <th>Nivel</th>
                                        <th width="200">Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>SEU NOME</td>
                                        <td>email@email.com</td>
                                        <td>LOGIN</td>
                                        <td>admn</td>
                                        <td>
                                            <a href="#" class="btn btn-warning">Editar</a>
                                            <a href="#" class="btn btn-danger">Excluir</a>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>@jdoe</td>
                                        <td>admn</td>
                                        <td>
                                            <a href="#" class="btn btn-warning">Editar</a>
                                            <a href="#" class="btn btn-danger">Excluir</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Matt</td>
                                        <td>Armon</td>
                                        <td>@marmon</td>
                                        <td>admn</td>
                                        <td>
                                            <a href="#" class="btn btn-warning">Editar</a>
                                            <a href="#" class="btn btn-danger">Excluir</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jane</td>
                                        <td>Kowalsky</td>
                                        <td>@jane-kow</td>
                                        <td>admn</td>
                                        <td>
                                            <a href="#" class="btn btn-warning">Editar</a>
                                            <a href="#" class="btn btn-danger">Excluir</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tim</td>
                                        <td>Pacey</td>
                                        <td>@t-pac</td>
                                        <td>admn</td>
                                        <td>
                                            <a href="#" class="btn btn-warning">Editar</a>
                                            <a href="#" class="btn btn-danger">Excluir</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Steve</td>
                                        <td>Rovinsky</td>
                                        <td>@steve-sky</td>
                                        <td>admn</td>
                                        <td>
                                            <a href="#" class="btn btn-warning">Editar</a>
                                            <a href="#" class="btn btn-danger">Excluir</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>-->
                </div>

                <div class="col-lg-3">
                    <h2 class="linha">Menu</h2>
                    <div class="bloco">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <span class="badge">14</span>
                                Registros
                            </li>
                        </ul>
                        
                        <div class="list-group">
						  <a href="#" class="list-group-item active">Administrador</a>
						  <a href="#" class="list-group-item" id="janela">Cadastrar</a>
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
        </div>
    
    <!--Jquery-->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/painel.js"></script>
    <!-- Latest compiled JavaScript faz a model funcionar-->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
<?php ob_end_flush();?>

<!--<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="         crossorigin="anonymous"></script>
jQuery library 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
<!--Jquery
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->