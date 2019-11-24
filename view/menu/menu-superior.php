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
  
  <nav class="navbar navbar-light bg-light static-top"> &nbsp;
    <p>&nbsp;
      <a href="index.php">
        <img src="img/Logo/logo1.png" alt="logo img"  width="300" height="51">
    </p>
    <div class="col-lg-6 h-100 text-center text-lg-right my-auto"> 
        <ul class="list-inline mb-0">
          <li class="list-inline-item mr-3"> 
            </a>
          </li>
          <li class="nav-item">
                  <a class="navbar-brand fas fa-shopping-cart fa-2x fa-fw perfil"  data-toggle="modal" data-target="#modalCarrinho"></a>
              </li>
        </ul>
    </div>
  </nav>
  
<div class="fundo">
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="index.php">Home</a>
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
                  <a class="dropdown-item " href="Cama_Elastica.php">Cama Elástica</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="Piscina_Bolinhas.php">Piscina De Bolinhas</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="Castelo_Inflavel.php">Castelo Inflável</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="Maquina_Algodao.php">Máquina De Algodão Doce‎</a>
              </li>
              <li class="nav-item active">
                <a class="navbar-brand" href="#">Galeria</a>
              </li>
              <li class="nav-item">
                  <a class="navbar-brand" href="#">Sobre</a>
              </li>
    </div>
             
          </ul>
            </a>
   </nav>
</div>
</div>


<script>
    function calculo(){
      var cep = $("#cep").val();
      $.post('../calcula.php',{cep:cep},function(data){
        $("#retorno").html(data);
      });
    }
  </script>
