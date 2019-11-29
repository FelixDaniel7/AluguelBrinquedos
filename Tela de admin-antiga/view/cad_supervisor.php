<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Dashboard</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/font-awesome.min.css" rel="stylesheet">
	<link href="../css/datepicker3.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet">
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<?php
		include_once("../menu/menu-superior.html");
		include_once("../menu/menu-lateral.html");
	?>	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Cadastros</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"></h1>
			</div>
		</div><!--/.row-->
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">Supervisor</div>
				<div class="panel-body">					
					<form role="form" action="proc_cad_supervisor.php" method="POST">					
						<div class="form-group">
							<label>Nome</label>
							<input class="form-control" placeholder="Nome" name="nome">
						</div>
						<div class="form-group">
							<label>RG</label>
							<input class="form-control" placeholder="RG" name="rg"> 
						</div>
						<div class="form-group">
							<label>CPF</label>
							<input class="form-control" placeholder="CPF" name="cpf">
						</div>
						<div class="form-group">
							<label>E-mail</label>
							<input class="form-control" type="email" placeholder="E-mail" name="email">
						</div>
						<div class="form-group">
							<label>Login</label>
							<input class="form-control" placeholder="Login" name="login">
						</div>
						<div class="form-group">
							<label>Senha</label>
							<input type="password" class="form-control" placeholder="Senha" name="senha">
						</div>
						<div class="form-group">
							<label>Data de nascimento</label>
							<input class="form-control" type="date" placeholder="Data de Nascimento" name="datanas">
						</div>
						<div class="form-group">
							<label>Endereço</label>
							<input class="form-control" placeholder="Endereço" name="endereco">
						</div>
						<input type="hidden" class="form-control" value="2" name="nivel">
						<div class="form-group">
							<center>
								<button type="submit" class="btn btn-md btn-primary">Cadastrar</button>
							</center>
						</div>
					</form>					
				</div>
			</div><!--/.col-->				
		</div><!--/.row-->
		
	</div>	<!--/.main-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>