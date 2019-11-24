<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Home - Aluguel Briquedos</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/landing-page.min.css" rel="stylesheet">
  <link href="css/css.css" rel="stylesheet">
</head>

<body style="background-color: cornflowerblue; ">

  
<?php
  include"menu/menu-superior.php";
?>
    

  <section class="features-icons bg-light text-center" >

      <div class="container">
          <h3>Criar conta</h3>
          <hr>
          <form>

              <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="Text">Nome <span>*</span></label>
                    <input type="email" class="form-control" id="Nome" placeholder="Email">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="Text">SobreNome <span>*</span></label>
                    <input type="password" class="form-control" id="SobreNome" placeholder="Senha">
                  </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="Text">Celular <span>*</span></label>
                      <input type="number" class="form-control" id="Telefone" placeholder="(11)9999-9999">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="Text">Telefone <span>*</span></label>
                      <input type="number" class="form-control" id="Celular" placeholder="4444-4444">
                    </div>
                  </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Email <span>*</span></label>
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Senha <span>*</span></label>
                  <input type="password" class="form-control" id="inputPassword4" placeholder="Senha">
                </div>
              </div>

              <div class="form-row">
                  <div class="form-group col-md-6"">
                      <label for="inputCPF">CPF <span>*</span></label>
                      <input type="text" class="form-control" id="inputCEP">
                    </div>
</div>
<div class="form-group">
  <div class="form-check">
    <input class="form-check-input" type="checkbox" id="gridCheck">
    <label class="form-check-label" for="gridCheck">
      Concocordo com os termos
    </label>
  </div>
</div>
<button type="submit" class="btn btn-primary">Entrar</button>
</form>
      </div>
    </div>
  </section>
  


  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#">Sobre</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Contatos</a>
            </li>
           
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2019. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
<!-- Modal -->
<div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered " role="document">
    <div class="modal-content ">
      <div class="modal-header justify-content-center">
        <h5 class="modal-title " id="TituloModalCentralizado">Logue-se</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Endereço de email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
           
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Lembrar senha</label>
          </div>
        
      </div>

      <div class="modal-footer justify-content-center">
        
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Enviar</button>
      
      </div> 
    </div>
  </div>
</div>
</form>


<div class="modal" id="modalCarrinho" tabindex="-1" role="dialog"aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Carrinho rápido</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
          <thead class="text-center">
            <th>Imagem</th>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Valor</th>
            <th>Acão</th>
          </thead>
          <tbody>

            <tr>
              <td> </td>
              <td> </td>
              <td> </td>
              <td> </td>
              <td class="text-center"><a href="" class="fas fa-ban"></a></td>
            </tr>
          </tbody>
        </table>
        <table class="table table-bordered">
        <thead>
            <th class="text-right">Total: R$ 00,00</th>  
          </thead>
          </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Finalizar pedido</button>
      </div>
    </div>
  </div>
</div>

