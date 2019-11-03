<?php
include_once('controller/equipamento.controller.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aluguel do Brinquedo - Escolha um Brinquedo</title>
</head>
<body background="img/construcao.png">

<form>
	data de uso
	<input type="date" name="txtdatauso"><br>
	horas de uso
	<input type="number" name="txtuso"><br>
	hora de montagem
	<input type="time" name="txtmontagem"><br>
	hora montagem
	<input type="time" name="txthoramontagem"><br>
	endereço
	<input type="text" name="txtendereco"><br>
	Forma de pagamento
	<select>
		<option value="0">Dinheiro</option>
		<option value="1">Cartao</option>
	</select><br>

	
	
	<?php
		foreach ($equi->ConsultarEqui() as $value) {
			echo "$value->CodEquipamento<br>
			
			
			$value->Nome <br>            
            $value->Descricao<br>        
            $value->Preco       <br> 			
			";
		}


		
	?>
	
	<input type="submit" name="">
</form>
</body>
</html>