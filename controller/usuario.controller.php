<?php
/*Tudo relacionado a login e ao usuario*/
include_once('../model/usuario.php');

$usu = new Usuario();/*Instancia do objeto da classe para poder usar as funçoes da classe*/

$acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);

switch ($acao) {
    
    case 'form_cadastrar_usu':
        ?>
                
        <!-- se for usar alguma mascara tem q abrir o script e colar o codigo aq-->

        <form name="form_cad_usuario" method="POST">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nome</label>
            <div class="col-sm-10">
            <input type="text" name="txtnome" class="form-control" placeholder="Nome">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nome de Login</label>
            <div class="col-sm-10">
            <input type="text" name="txtlogin" class="form-control" placeholder="Login">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
            <input type="email" name="txtemail" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Senha</label>
            <div class="col-sm-10">
            <input type="password" name="txtsenha" class="form-control" placeholder="Senha">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nivel de acesso</label>
            <div class="col-sm-10">
            <select class="form-control" name="tipo">
                <option value="">Escolha uma opção</option>
                <option value="Administrador">Administrador</option>
                <option value="Moderador">Moderador</option>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Cadastrar Usuário</button>
            <img src="../img/load.gif" class="load" alt="Carregando..." style="display: none" />
            </div>
            
        </div>
        </form>
        <div class="retorno"></div>

        <?php
        break;

    case 'cadastrar_usu':

        
        $usu->Nome = filter_input(INPUT_POST, 'txtnome', FILTER_SANITIZE_STRING);
        $usu->Login = filter_input(INPUT_POST, 'txtlogin', FILTER_SANITIZE_STRING);
        $usu->Email = filter_input(INPUT_POST, 'txtemail', FILTER_SANITIZE_EMAIL);
        $usu->Senha = filter_input(INPUT_POST, 'txtsenha', FILTER_SANITIZE_STRING);
        $usu->Tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);

        if ($usu->CadastrarUsuario()) {
            echo true;
        }
        break;

    case 'consultar_usu':

        
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
                    </tr>
                <?php
                
                endforeach;
        }
        else{
            return false;
        }
        break;

        case 'form_editar_usu':
            $CodUsuario = filter_input(INPUT_POST, 'CodUsuario', FILTER_SANITIZE_NUMBER_INT);

            $dados = $usu->RetornarDadosUsu($CodUsuario);

            ?>
            

            <form action="" name="form_editar_usuario" method="POST">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nome</label>
            <div class="col-sm-10">
            <input type="text" name="txtnome" value="<?php echo $dados->Nome; ?>" class="form-control" placeholder="Nome">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Login</label>
            <div class="col-sm-10">
            <input type="text" name="txtlogin" value="<?php echo $dados->Login; ?>"  class="form-control" placeholder="Login">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
            <input type="email" name="txtemail" value="<?php echo $dados->Email; ?>"  class="form-control" placeholder="Email">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Senha</label>
            <div class="col-sm-10">
            <input type="password" name="txtsenha" value="AluguelBrinquedos"  class="form-control" placeholder="Email">
            </div>
        </div>

        <input type="hidden" name="CodUsuario" value="<?php echo $dados->CodUsuario; ?>"/>
        
        <div class="form-group row">
            <div class="col-sm-10">
            <button id="btn_atualiza" class="btn btn-primary">
            Atualizar
        </button>
            <img src="../img/load.gif" class="load" alt="Carregando..." style="display: none" />
            </div>
        </div>
        </form>
        <div class="retorno"></div>

    <?php

            break;

        case 'editar_usu':

            $usu->CodUsuario = filter_input(INPUT_POST, 'CodUsuario', FILTER_SANITIZE_NUMBER_INT);
            $usu->Nome = filter_input(INPUT_POST, 'txtnome', FILTER_SANITIZE_STRING);
            $usu->Login = filter_input(INPUT_POST, 'txtlogin', FILTER_SANITIZE_STRING);
            $usu->Email = filter_input(INPUT_POST, 'txtemail', FILTER_SANITIZE_EMAIL);
            $usu->Senha = filter_input(INPUT_POST, 'txtsenha', FILTER_SANITIZE_STRING);

            if($usu->AtualizarUsuario()){
                echo true;
            }
            break;

        case 'excluir_usu':

            $usu->CodUsuario = filter_input(INPUT_POST, 'CodUsuario', FILTER_SANITIZE_NUMBER_INT);

            if($usu->ExcluirUsuario())
            {
                echo true;
            }
            break;

        case 'login':

            
            $Login = filter_input(INPUT_POST, 'txtlogin', FILTER_SANITIZE_STRING);    
            $Senha = filter_input(INPUT_POST, 'txtsenha', FILTER_SANITIZE_STRING);


            if($usu->Login($Login,$Senha)){
                echo 'login';
            }
            else{
                $dados = $usu->RetornoLogin($Login);
                
                session_start();
                if (!isset($_SESSION['tentativas'])) {                    
                    $_SESSION['tentativas'] = 1;
                }else{
                    $_SESSION['tentativas'] ++;
                }
                if($_SESSION['tentativas'] >= 3){
                    echo "Muitas tentativas";
                }
                //echo 'Tentativas: '.$_SESSION['tentativas'] ."  ";

                if (empty($Login) || empty($Senha)) {//campos vazios
                    echo 'campo vazio';
                }
                else if (!$dados) {
                    echo "nao localizado";
                }
                else if ($dados->Senha != sha1(md5(strrev($Senha)))) {
                    echo 'senha'; 
                }
                else if ($dados->Tipo != 'Administrador') {
                    echo "nivel de acesso";
                }
            } 
            break;
}

// /*function limpaCPF($valor){
//     $valor = trim($valor);
//     $isso = array('.','-');
//     $aquilo = array('');
//     return str_replace($isso, $aquilo, $valor);
// }*/
?>