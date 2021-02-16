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
	

	//Switch Case

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

$sobrenome = "Lourenco";

$nomeCompleto = $nome . " " . $sobrenome;

echo '<p>'.$nome.'</p>';

echo '<p>'.$nomeCompleto.'</p>';


var_dump($nome);

// exit; esse comando interrompe o processo

//Limpar variavel 
unset($nome);

//verifical se existe conteudo na variavel 
if(isset($nome)){

	echo $nome;
}else{

	echo '<p>Variavel esta vazia</p>';
}


//variavel array
$fruta = array("abacaxi", "laranja", "manga", "abacate");

echo $fruta[0].'<br>';
echo $fruta[1].'<br>';
echo $fruta[3].'<br><br>';

//variavel do tipo objeto
$dataNascimento = new DateTime();


var_dump($dataNascimento);

echo '<p></p>';

$arquivo  = fopen("index.php", "r");

var_dump($arquivo);


//variavel do tipo NULL
$nulo = null;


//variavel GET
if(isset($_GET["ano"])){
	$ano = $_GET["ano"]; 
	echo '<p>Ano: '.$ano.'</p>';
	var_dump($ano); 
}

if(isset($_GET["mes"]))
echo '<p>Mes: '.$_GET["mes"].'</p>';

?>

<p><a href="?ano=2021&mes=2">clique aqui</a></p>


<?php


//ip da maquina //local pagina
$ip  = $_SERVER["REMOTE_ADDR"];
$local  = $_SERVER["SCRIPT_NAME"];

echo $local. ' '. $ip;





//varivel global
$var1 = "Alessandro Jonas";

function exibirNome(){
	
	global $var1;
	echo '<p>Nome na Funcao: '. $var1.'</p>';
}

function exibirNome2(){

	if(isset($var))	
	echo $var1;
	else
	echo '<p>Nao existe a variavel pois nao foi definida global</p>';	
}

exibirNome();

exibirNome2();


function usarVariavelGlobal(){

	global $var1;
	$var1 = "Jonas";
}

usarVariavelGlobal();

echo '<p>'.$var1.'</p>';



//Operadores de Atribuição

$var2 = "Hello";
$var2 .= "World";
echo '<p>'.$var2.'</p>';

$valorTotal = 100;
$valorTotal += 25;
echo '<p>'.$valorTotal.'</p>';

$valorTotal -= 75;
echo '<p>'.$valorTotal.'</p>';

$valorTotal *= 2;
echo '<p>'.$valorTotal.'</p>';


$a = 10;
$b = 2;

echo $a + $b;
echo "<br>";

echo $a - $b;
echo "<br>";


echo $a * $b;
echo "<br>";

echo $a / $b;
echo "<br>";

echo $a % $b;
echo "<br>";


echo $a ** $b;
echo "<br>";

echo '<p></p>';




if (isset($_POST["numero1"])){

	$parouimpar = $_POST["numero1"];

	$result1 = $parouimpar % 2;

	if($result1 == 0){
		echo "O Numero é <strong>Par</strong>";
	}
	else{
		echo "O Numero é <strong>Impar</strong>";
	}


}



?>

<form name="parouimpar" method="POST" action="">

	<input type="text" name="numero1" id="numero1">

	<input type="submit" value="ParOuImpar">

</form>


<?php

	//operador de Comparação
	$a = 55.0;
	$b = 55;

	var_dump($a > $b);
	echo "<br>";
	var_dump($a < $b);
	echo "<br>";
	var_dump($a == $b);
	echo "<br>";
	var_dump($a === $b);
	echo "<br>";
	var_dump($a != $b);
	echo "<br>";
	var_dump($a !== $b);
	echo "<br>";
?>

