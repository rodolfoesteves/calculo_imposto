<?php
	include "salario.class.php";
	$salario = new Salario($_POST['salario']);
	if (!$salario->get_salario_bruto()){
		header("location:index.php?erro=1");
	}
	else{
		$salario->calcularINSS();
		$salario->calcularIRRF();
	}
	include "cabecalho.php";
	include "resposta.php";
	include "rodape.php";
?>
