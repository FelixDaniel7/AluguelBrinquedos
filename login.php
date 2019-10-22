<!--inicio login-->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">                      
        <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4>Login</h4>
                    <form class="aa-login-form" action="?acao=login_cli" method="POST">
                        <label for="">Endereço de Email<span>*</span></label>
                        <input type="text" name="txtlogin" placeholder="nome@gmail.com">
                        <label for="">Senha<span>*</span></label>
                        <input type="password" name="txtsenhalogin" placeholder="Senha">
                        <button class="aa-browse-btn" type="submit">Entrar</button> 
                        <p class="aa-lost-password"><a href="#"> Perdeu sua senha?</a></p>
                    <div class="aa-register-now">
              Não tem uma conta?<a href="account.php">Registre-se agora!</a>
            </div>
          </form>
        </div>                        
      </div>
    </div>
  </div> 
<!--fim login-->