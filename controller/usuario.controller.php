<?php
/*Tudo relacionado a login e ao usuario*/
include_once('../model/usuario.php');


/*PHPMailer*/
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require '../mailer/src/Exception.php';
require '../mailer/src/PHPMailer.php';
require '../mailer/src/SMTP.php';
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
/*///////////////////////*/

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

    /*case 'consultar_usu':

        
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
        break;*/

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
                session_start();
                $_SESSION['administrador'][] = $usu->RetornoLogin($Login); 
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
                    echo "tentativas";
                }
                //echo 'Tentativas: '.$_SESSION['tentativas'] ."  ";

                else if (empty($Login) || empty($Senha)) {//campos vazios
                    echo 'vazio';
                }
                else if (!$dados) {
                    echo "naolocalizado";
                }
                else if ($dados->Senha != sha1(md5(strrev($Senha)))) {
                    echo 'senha'; 
                }
                else if ($dados->Tipo != 'Administrador') {
                    echo "nivel";
                }


            } 
            break;

        case 'sair':
            session_start();
            session_destroy();
            unset($_SESSION['administrador']);
            echo "logoff";
            //header("location: login.php");
            break;

        case 'verificar':


            $resposta = $_POST['txtresposta'];
            $certa = $_POST['txtcerta'];

            if ($resposta == $certa) {
                echo "certo";
                session_start();
                $_SESSION['tentativas'] = 0 ;
            }else{
                echo "errado";
            }
            break;


        case 'recuperar_senha':

                //Endereço de email q ser enviado
                $email = filter_input(INPUT_POST, 'txtemail', FILTER_SANITIZE_EMAIL);

                //Cod de Verificação
                $cod_recuperacao = rand(22222,99999);
                
             
            
                session_start();

                //Se a sessao nao existir eu crio ela
                if (!isset($_SESSION['cod_verificaco'])) {
                    $_SESSION['cod_verificacao'] = $cod_recuperacao;
                
                }else{
                    //Se ela já existir eu destruo ela
                    unset($_SESSION['cod_verificacao']);    
                }
                
                print_r($_SESSION['cod_verificacao']);
                /*
                echo "<script>
                    alert('Codigo enviado com sucesso! Olhe seu email $cod_recuperacao');
                    window.location='cod_verificacao.php';        
                    </script>";
                    
                try {
                    //Server settings
                    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
                    $mail->isSMTP();                                            // Send using SMTP
                    $mail->Host       = 'SMTP.office365.com';                    // Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                    $mail->Username   = 'danielfernandesdk17@outlook.com';                     // SMTP username
                    $mail->Password   = base64_decode('RGFuaWVsT3V0');                               // SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
                    $mail->Port       = 587;                                    // TCP port to connect to

                    //Recipients
                    $mail->setFrom('danielfernandesdk17@outlook.com', 'Site Notícias');
                    $mail->addAddress($email, 'Senhor Usuario');     // Add a recipient
                    //$mail->addAddress('ellen@example.com');               // Name is optional
                    //$mail->addReplyTo('info@example.com', 'Information');
                    //$mail->addCC('cc@example.com');
                    //$mail->addBCC('bcc@example.com');

                    // Attachments
                    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

                    // Content
                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = "Recuperacao de senha Site Noticias";
                    $mail->Body    = "<h3>Seu codigo de Verificacao: $cod_recuperacao</h3>";
                    $mail->AltBody = 'Texto alternativo';

                    $mail->send();
                    echo "<script>
                    alert('Codigo enviado com sucesso! Olhe seu email');
                    window.location='cod_verificacao.php';        
                    </script>";
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    echo "<script>
                    alert('Deu Ruim');
                    window.location='senha.php';        
                    </script>";
                }*/
        break;

        case 'confrimar_cod':

            $codigo = $_POST['txtcod'];

            session_start();
            
            if ($_SESSION['cod_verificacao'] == $codigo) {
                echo "comfirmado";
                $_SESSION['cod_verificacao'] = 12;
            }else{
                echo "incompatível";
            }
        break;
}





//}
?>