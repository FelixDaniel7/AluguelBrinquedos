<?php
session_start();

//Incluir conexao com BD
include_once("../bddedados/conexaoc.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$nivel = filter_input(INPUT_POST, 'nivel', FILTER_SANITIZE_STRING);


if(!empty($nome) && !empty($email) && !empty($login) && !empty($senha) && !empty($nivel)){
	//Converter a data e hora do formato brasileiro para o formato do Banco de Dados
	// $data = explode(" ", $start);
	// list($date, $hora) = $data;
	// $data_sem_barra = array_reverse(explode("/", $date));
	// $data_sem_barra = implode("-", $data_sem_barra);
	// $start_sem_barra = $data_sem_barra . " " . $hora;
	
	// $data = explode(" ", $end);
	// list($date, $hora) = $data;
	// $data_sem_barra = array_reverse(explode("/", $date));
	// $data_sem_barra = implode("-", $data_sem_barra);
	// $end_sem_barra = $data_sem_barra . " " . $hora;
	
	$result_events = "INSERT INTO administrador (Nome, Email, Login, Senha, NivelAcesso) VALUES ('$nome', '$email', '$login', '$senha', '$nivel')";
	$resultado_events = mysqli_query($conn, $result_events);
	
	//Verificar se salvou no banco de dados através "mysqli_insert_id" o qual verifica se existe o ID do último dado inserido
	if(mysqli_insert_id($conn)){
		$_SESSION['msg'] = "<div class='alert alert-success' role='alert'>O Usuario foi cadastrado com Sucesso</div>";
		header("Location: ../view/cad_admin.php");
	}else{
		$_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Erro ao cadastrar Usuario</div>";
		header("Location: ../view/cad_admin.php");
	}
	
}else{
	$_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Erro ao cadastrar Usuario</div>";
	header("Location: ../view/cad_admin.php");
}