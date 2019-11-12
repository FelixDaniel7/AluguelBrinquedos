<!-- VAO FICAR JUNTO COM O MENU SUPERIOR Q VAI ESTAR EM TODAS AS PAGINAS MENOS NA DE ADMIN -->


<!-- Modal cadastro -->
<div class="modal fade" id="modal_login" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
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

<!-- modal carrinho -->
<div class="modal" id="modal_carrinho" tabindex="-1" role="dialog"aria-labelledby="exampleModalLabel" aria-hidden="true">

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