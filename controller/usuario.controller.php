<?php
/*Tudo relacionado a login e ao usuario*/


include_once('../model/usuario.php');

//$usu = new Usuario();/*Instancia do objeto da classe para poder usar as funçoes da classe*/

$acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);

switch ($acao) {
    
    case 'form_cadastrar_cliente':
        ?>
                
        <!-- se for usar alguma mascara tem q abrir o script e colar o codigo aq-->

        <form name="form_cad_usuario" method="POST">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nome</label>
            <div class="col-sm-10">
            <input type="text" name="nome" class="form-control" placeholder="Nome">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nome de Login</label>
            <div class="col-sm-10">
            <input type="text" name="login" class="form-control" placeholder="Login">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
            <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Senha</label>
            <div class="col-sm-10">
            <input type="password" name="senha" class="form-control" placeholder="Senha">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nivel de acesso</label>
            <div class="col-sm-10">
            <select class="form-control" name="nivel">
                <option value="">Escolha uma opção</option>
                <option value="1">Administrador</option>
                <option value="2">Moderador</option>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Entrar</button>
            <img src="../img/load.gif" class="load" alt="Carregando..." style="display: none" />
            </div>
            
        </div>
        </form>
        <div class="retorno"></div>

        <?php
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

// if (isset($_REQUEST["acao"])) 
// {
//     switch ($_REQUEST["acao"]) {
//         case 'cadastrar_cli':
//         $cli->cpf = $_POST["txtcpf"];
//         $cli->nome = $_POST["txtnome"];
//         $cli->telefone = $_POST["txttelefone"];
//         $cli->email = $_POST["txtemail"];
//         $cli->senha = sha1(md5($_POST["txtsenha"]));
//         $cli->endereco = $_POST["txtendereco"];
        
//         $cli->Cadastrar();

//         echo "<script>
//              alert('Cadastro efetuado com SUCESSO!');
//             window.location='account.php'
//             </script>";
//         break;

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
//     }
// }
?>