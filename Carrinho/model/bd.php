<?php
include_once("conexao.php");

$consulta = $pdo->prepare("SELECT * FROM equipamento");
$consulta -> execute();

$linhas = $consulta -> rowCount();

foreach($consulta as $mostra):

$produtos;

$produtos[$mostra["CodEquipamento"]]["nomeproduto"] = $mostra["Nome"];
$produtos[$mostra["CodEquipamento"]]["preco"] = $mostra["Preco"];

endforeach;

?>