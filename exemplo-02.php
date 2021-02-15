<?php


	//require obrigado o arquivo existe e funcionar corretamente
	//include tenta funcionar mesmo se não exister e estiver com erro
	//include existe o Include PAth 
	//include permite adicionar o script externo
	//require_once é o ideal, o melhor
	#include "inc/mostrar_erro.php";
	
	require_once("inc/mostrar_erro.php");
	

	include "exemplo-01.php";
	
	$resultado = somar(10, 25);

	echo $resultado;

?>