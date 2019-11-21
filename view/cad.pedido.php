<?php 
//formulario de cadastro de pedido e dados do cliente 



include_once('../controller/pedido.controller.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Home - Aluguel Briquedos</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Jquery -->
    <script src="../js/jquery-3.4.1.min.js"></script>
    <!-- Ajax -->
    <script src="../ajax/pedido.ajax.js"></script>
    <!-- Alertas Bonitinhos -->
    <script src="../js/sweetalert.js"></script>
    <!-- datatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>

    

  <section class="features-icons bg-light text-center" >

      <div class="container">
          <h3>Informações Pessoais</h3>
          <hr>
          <form>

              <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="Text">Nome <span>*</span></label>
                    <input type="text" class="form-control" id="Nome" placeholder="Alfredo">
                  </div>                
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="Text">Celular <span>*</span></label>
                      <input type="number" class="form-control" id="Telefone" placeholder="(11)9999-9999">
                    </div>                    
                  </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Email <span>*</span></label>
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Email" >
                </div>               
              </div>

              <div class="form-row">
                  <div class="form-group col-md-6">
                      <label for="inputCPF">CPF <span>*</span></label>
                      <input type="text" class="form-control" id="inputCEP">
                    </div>
             </div>


    <h3>Local da Montagem</h3>
    <hr>

        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="Text"> CEP <span>*</span></label>
              <input type="number" class="form-control" id="Nome" placeholder="Informe seu CEP">
            </div>                
          </div>
          <div class="form-row">
              <div class="form-group col-md-6">
                <label for="Text">Endereço <span>*</span></label>
                <input-group-text type="text" class="form-control" id="Endereço" placeholder="Rua da Florinda">
              </div>                    
            </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Bairro <span>*</span></label>
            <input-group-text type="text" class="form-control" id="Bairro" placeholder="Vila do chaves">
          </div>               
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCPF">Numero</label> <span>*</span></label>
                <input type="number" class="form-control" id="Numero" placeholder="7" >
              </div>
       </div>
       <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Complemento <span>*</span></label>
          <input type="text" class="form-control" id="Complemento" placeholder="Do lado do barril">
        </div>               
      </div>

      
    <h3>Dados do Pedido</h3>
    <hr>

        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="Text"> Data de uso <span>*</span></label>
              <input type="date" class="form-control" id="dataUso" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" min="2019-11-07" max="2022-12-31" >
            </div>                
          </div>
          <div class="form-row">
              <div class="form-group col-md-6">
                <label for="Text">Horas de utilização <span>*</span></label>
                <input type="number" class="form-control" placeholder="Horas" maxlength="2" >
              </div>                    
            </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Horário de Montagem <span>*</span></label>
            <input type="time" class="form-control" id="hrMontagem" >
          </div>               
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="Text">Forma de pagamento<span>*</span></label>
              <select class="custom-select" id="inputGroupSelect01" >
                    <option selected>Escolha...</option>
                    <option value="1">Boleto</option>
                    <option value="2">Cartão</option>
                    </select>
            </div>
          </div>

      <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck" >
            <label class="form-check-label" for="gridCheck">
              Concordo com os termos
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
      </form>
              </div>
            </div>
          </section>
  


</body>

</html>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>