<?php 
//pegar oq o usuario vai digitar
$REQUEST_URI = filter_input(INPUT_SERVER,'REQUEST_URI');

///$REQUEST_URI = $REQUEST_URI."view/";

//echo $REQUEST_URI;
//remover a requisição get 
$INITE = strpos($REQUEST_URI, "?");//se existe a ? na variavel e coloca na variavel inite onde ela começa

if ($INITE) {//so vai remover se exitir
    $REQUEST_URI = substr($REQUEST_URI, 0 , $INITE);//remover tudo q tem depois da interrogação
}


$REQUEST_URI_PASTA = substr($REQUEST_URI, 1);//vai pular o indice 1 q é a barra e pegar todo o resto

//echo $REQUEST_URI_PASTA;

$URL = explode('/', $REQUEST_URI_PASTA);
//verificar se a variaVEL DO INDICE 0 É IGUAL A VAZIO
$URL[1] = ($URL[1] != '' ? $URL[1] : 'inicio');


//se os arquivos ou pastas existe 
$pagina = "view/$URL[1].php";
if (file_exists($pagina)) {
    require ("$pagina");//exibindo tudo na raiz
}
else{
    echo "<br>erro<br>";
    //include("view/erro.php");
}



// elseif (is_dir("_site_/$URL[2]")) {//verificar se é um diretorio
//     if (isset($URL[3]) && file_exists("_site_/$URL[2]"."/$URL[3].php")) {//se esta setado , se tem algo dentro do diretorio
//         require ("_site_/$URL[2]"."/$URL[3].php");   
//     }
//     else{
//         echo 'erro1';
//     }
// }
// else{
//     echo 'erro2';
// }

echo "<br>";

print_r($URL);




?>