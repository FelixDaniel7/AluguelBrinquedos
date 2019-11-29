<?php
session_start();

//Incluir conexao com BD
include_once("../bddedados/conexaoc.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$desc = filter_input(INPUT_POST, 'desc', FILTER_SANITIZE_STRING);
$preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_STRING);

if(!empty($nome) && !empty($desc) && !empty($preco)){
	
	$result_events = "INSERT INTO equipamento (Nome, Descricao, Preco) VALUES ('$nome', '$desc', '$preco')";
	$resultado_events = mysqli_query($conn, $result_events);
	
	//Verificar se salvou no banco de dados através "mysqli_insert_id" o qual verifica se existe o ID do último dado inserido
	if(mysqli_insert_id($conn)){
		$_SESSION['msg'] = "<div class='alert alert-success' role='alert'>O Evento foi cadastrado com Sucesso<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
		header("Location: agenda.php");
	}else{
		$_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Erro ao cadastrar o evento 2 <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
		header("Location: agenda.php");
	}
	
}else{
	$_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Erro ao cadastrar o evento 1 <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
	header("Location: agenda.php");
}