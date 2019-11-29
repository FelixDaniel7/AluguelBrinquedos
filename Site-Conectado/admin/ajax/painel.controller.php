<?php
$acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);

switch ($acao) {
    case 'form_cad':
        ?>
        
        
        <!-- se for usar alguma mascara tem q abrir o script e colar o codigo aq-->


        <form action="" name="form_cad" method="POST">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nome</label>
            <div class="col-sm-10">
            <input type="text" name="nome" class="form-control" placeholder="Nome">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nome de Login</label>
            <div class="col-sm-10">
            <input type="text" name="login" class="form-control" placeholder="Login" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
            <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Senha</label>
            <div class="col-sm-10">
            <input type="password" name="senha" class="form-control" placeholder="Senha" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nivel de acesso</label>
            <div class="col-sm-10">
            <select class="form-control" name="nivel">
                <option value="">Escolha uma opção</option>
                <option value="1">Administrador</option>
                <option value="2">Supervisor</option>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Entrar</button>
            <img src="img/load.gif" class="load" alt="Carregando..." style="display: none" />
            </div>
            
        </div>
        </form>
        <div class="retorno"></div>

        <?php

        break;
    
    default:
        echo "Nada";
        break;
}