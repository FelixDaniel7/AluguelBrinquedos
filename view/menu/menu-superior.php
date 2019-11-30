<!-- emojis -->
<link href="css/emoji-css.css" rel="stylesheet">
<nav class="nav justify-content-center bg-light">
  <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Contatos: (11)95555-5555</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Contatos: (11)4444-4444</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">E-mail: nome@gmail.com</a>
      </li>
  </ul>
</nav>
  
<!-- logo -->
<nav class="navbar navbar-light bg-light static-top"> &nbsp;
  <p>&nbsp;
  <a href="home.php">
    <img src="img/Logo/logo1.png" alt="logo img"  width="300" height="51">
  </p>
  <div class="col-lg-6 h-100 text-center text-lg-right my-auto"> 
    <ul class="list-inline mb-0">
      <li class="nav-item">
        <a class="navbar-brand fas fa-shopping-cart fa-2x fa-fw perfil"  data-toggle="modal" data-target="#modalCarrinho"></a>
      </li>
    </ul>
  </div>
</nav>
  
<!-- navbar -->
<div class="fundo">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="index">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
          <a class="navbar-brand  dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Brinquedos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php 
            if ($certo = $equi->ConsultarEquipamento()) {
              foreach($certo as $Numero):
                ?>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item " href="Pag_Equipamento?CodEquipamento=<?php echo $Numero->CodEquipamento;?>">
                    <?php echo $Numero->Nome;?>
                </a>
                
              <?php endforeach;
                }else {
                  echo "Nenhum registro";
                } 
              ?>             
          </div>
          </li>
          <li class="nav-item active">
            <a class="navbar-brand" href="galeria">Galeria</a>
          </li>
          <li class="nav-item">
            <a class="navbar-brand" href="sobre">Sobre</a>
          </li>
        </div>
        </ul>
      </a>
    </nav>
  </div>
</div>

<!-- calculo de cep -->
<script>
    function calculo(){
      var cep = $("#cep").val();
      $.post('../calcula.php',{cep:cep},function(data){
        $("#retornoFrete").html(data);
      });
    }
</script>

<!-- Modal carrinho -->
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
        <!-- ajax -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <a href="Cad_Pedido.php" class="btn btn-primary">Finalizar pedido</a>
      </div>
    </div>
  </div>
</div>