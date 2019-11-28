<?php

function CalcularFrete($cep){

    $exec = $this->con->prepare("SELECT * FROM PEDIDO WHERE CEP = ?");
    bindValue(1,$cep,PDO::PARAM_INT);
    $exec->execute();

    $cep_origem = "85930000";  
    $cep_destino = $cep;

    $peso          = 2;
    $valor         = 100;
    $tipo_do_frete = '41106';
    $altura        = 6;
    $largura       = 20;
    $comprimento   = 20;

    $url = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?";
    $url .= "nCdEmpresa=";
    $url .= "&sDsSenha=";
    $url .= "&sCepOrigem=" . $cep_origem;
    $url .= "&sCepDestino=" . $cep_destino;
    $url .= "&nVlPeso=" . $peso;
    $url .= "&nVlLargura=" . $largura;
    $url .= "&nVlAltura=" . $altura;
    $url .= "&nCdFormato=1";
    $url .= "&nVlComprimento=" . $comprimento;
    $url .= "&sCdMaoProria=n";
    $url .= "&nVlValorDeclarado=" . $valor;
    $url .= "&sCdAvisoRecebimento=n";
    $url .= "&nCdServico=" . $tipo_do_frete;
    $url .= "&nVlDiametro=0";
    $url .= "&StrRetorno=xml";

    $xml = simplexml_load_file($url);

    $frete = $xml->cServico;

    $frete->Valor. $frete->PrazoEntrega;
}
?>