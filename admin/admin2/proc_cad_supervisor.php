<?php
session_start();

//Incluir conexao com BD
include_once("conexaoc.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$datanas = filter_input(INPUT_POST, 'datanas', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$nivel = filter_input(INPUT_POST, 'nivel', FILTER_SANITIZE_STRING);


if(!empty($nome) && !empty($rg) && !empty($cpf) && !empty($email) && !empty($login) && !empty($senha) && !empty($datanas) && !empty($endereco)&& !empty($nivel)){
	//Converter a data e hora do formato brasileiro para o formato do Banco de Dados
	// $data = explode(" ", $start);
	// list($date, $hora) = $data;
	// $data_sem_barra = array_reverse(explode("/", $date));
	// $data_sem_barra = implode("-", $data_sem_barra);
	// $start_sem_barra = $data_sem_barra . " " . $hora;

	
	$result_events = "INSERT INTO supervisor (Nome, Rg, CPF, Email, Login, Senha, DataNascimento, Endereco, NivelAcesso) VALUES ('$nome', '$rg', '$cpf', '$email', '$login', '$senha', '$datanas', '$endereco', '$nivel')";
	$resultado_events = mysqli_query($conn, $result_events);
	
	//Verificar se salvou no banco de dados através "mysqli_insert_id" o qual verifica se existe o ID do último dado inserido
	if(mysqli_insert_id($conn)){
		$_SESSION['msg'] = "<div class='alert alert-success' role='alert'>O Evento foi cadastrado com Sucesso<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
		header("Location: agenda.php");
	}else{
		$_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Erro ao cadastrar o evento <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
		header("Location: agenda.php");
	}
	
}else{
	$_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Erro ao cadastrar o evento1 <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
	header("Location: agenda.php");
}