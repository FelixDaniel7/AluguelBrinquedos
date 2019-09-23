<?php

class Aluguel{

	private 

	
    DataAluguel DATETIME, -- hora do envio do pedido 
    Data_de_uso DATE, -- 1970-12-31
    HorasAlugado TIME,  -- Quantidade de horas de aluguel,aluguel cobrado por hora
    Data_Hora_Montagem DATETIME, -- 1970-01-01 00:00:00
    Hora_Desmontagem TIME,-- fazer o calculo horamontagem mais horas usadas
    EnderecoMontagem VARCHAR(200),
    PrecoFinal DECIMAL(8,2),
    FormaPagamento BIT, -- dinheiro ou cartao


	function __construct()
	{
		include_once('conexao.php');

	}

}



?>