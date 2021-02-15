<?php

	//curso de PHP 15/02/2021

	echo "<p><strong>Ola Enfermeira </strong></p>";
	
	//require obrigado o arquivo existe e funcionar corretamente
	//include tenta funcionar mesmo se não exister e estiver com erro
	//include existe o Include PAth 
	//include permite adicionar o script externo
	//require_once é o ideal, o melhor
	#include "inc/mostrar_erro.php";
	
	require_once("inc/mostrar_erro.php");
	

	include "exemplo-01.php";
	
	$resultado = somar(10, 25);

	echo '<p>Resultado da Soma: '.$resultado.'</p>';
	

	$diadasemana = date("w");
	#echo $diadasemana;

	switch($diadasemana){
		
		case 0:
		echo "<p>Domingo</p>";
		break;
		
		case 1:
		echo "<p>Segunda-feira</p>";
		break;
		
		case 2:
		echo "<p>Terça-feira</p>";
		break;
		
		case 3:
		echo "<p>Quarta-feira</p>";
		break;
		
		case 4:
		echo "<p>Quinta-feira</p>";
		break;
		
		case 5:
		echo "<p>Sexta-feira</p>";
		break;
		
		case 6:
		echo "<p>Sabado</p>";
		break;
		
		default:
		echo "<p>Ocorreu um erro</p>";
		break;
		
	}
	
echo "<p>testeeee - Ale</p>";

echo "<p>Curso com Github online</p>";


	//a última linha não precisa de ;
	//mas se for adicionada outra, ira ocorrer erro.
$nome = "Alessandro Jonas";

var_dump($nome);







?>

