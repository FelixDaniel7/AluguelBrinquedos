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
                <option value="administrador">Administrador</option>
                <option value="moderador">Moderador</option>
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
    
    default:
        # code...
        break;
}

?>

<?php
// include_once("model/cliente.php");

// $cli = new Cliente();

// /*function limpaCPF($valor){
//     $valor = trim($valor);
//     $isso = array('.','-');
//     $aquilo = array('');
//     return str_replace($isso, $aquilo, $valor);
// }*/


//         case 'login_cli':
//         $nome = $_POST['txtnome'];
//         $login = $_POST['txtlogin'];
//         $senhalogin = sha1(md5($_POST['txtsenhalogin']));

//         $user = $cli->Login($login,$senhalogin,$nome);//select no BD

//         if ($user == true) {
//             session_start();
// 				$_SESSION["nome_logado"] = $nome;
//             header('location:aluguel.php');
//         }
//         else {
//             echo "<script>alert('Dados de login incorretos')</script>";
//         }
        
//         break;

?>