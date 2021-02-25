<?php

	//curso de PHP 15/02/2021
	echo '********* Require e Include **************<br>';
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
	

	echo '************** Switch CASE -**************<br>';
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


echo '<br>****************************** UNSET e ISSET **********************************<br>';
//Limpar variavel 
unset($nome);

//verifical se existe conteudo na variavel 
if(isset($nome)){

	echo $nome;
}else{

	echo '<p>Variavel esta vazia</p>';
}


echo '************************************* ARRAY **********************************<br>';
//variavel array
$fruta = array("abacaxi", "laranja", "manga", "abacate");

echo $fruta[0].'<br>';
echo $fruta[1].'<br>';
echo $fruta[3].'<br><br>';


echo '************* Variavel tipo objeto ******************<br>';
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




echo '<br>***************************************** Variavel Global ***********************************<br>';
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


echo '******************************************  Operadores de Atribuição ****************************<br>';
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

	//validador espace ship

	$a = 50;
	$b = 35;

	var_dump($a <=> $b); //1
	echo "<br>";

	$a = 35;
	$b = 35;
	echo '************************************** Validador Space Ship *********************************<br>';
	var_dump($a <=> $b); //0
	echo "<br>";

	$a = 10;
	$b = 35;

	var_dump($a <=> $b); //-1
	echo "<br>";

	echo "<p></p>";
	//comparar variaveis nula NULL
	$a = NULL;
	$b = NULL;
	$c = 15;

	echo $a ?? $b ?? $c; //ira imprimir 15

	echo "<p></p>";
	//exemplo 2

	$a = NULL;
	$b = 17;
	$c = 10;

	echo $a ?? $b ?? $c; //ira imprimir o 10

	echo "<p></p>";

	//operador de incremento;
	$a = 10;
	echo $a."<br>";
	
	$a++;
	echo $a."<br>";

	//++a pre incremento
	//--a pre decremento
	//a++ pos incremento
	//a-- pos decremento

	echo "<p></p>";

	$resultado = 10+10 && 2*10;
	var_dump($resultado);

	echo "<p></p>";

	//String
	$nome = "Alessandro";
	echo "$nome"; //exibi Alessandro
	echo ' $nome'; //exibi $nome	
	//aspas dupla é melhor
	
	echo "<p></p>";
	echo strtoupper($nome); //letra maiuscula
	echo "<br>";
	echo strtolower($nome); //letra minuscula
	echo "<br>";
	$nome = "alessandro jonas";
	echo ucwords($nome); //Primeira de cada palavra maiuscula
	echo "<br>";
	echo ucfirst($nome); //Some a primeira letra da primeira palavra maiuscula
	echo "<br>";

	echo "<p></p>";

	$nomenovo = str_replace("a", "@", $nome); //troca o a pelo @ na variavel $nomenovo
	echo $nomenovo;

	echo "<p></p>";

	$frase = "Ola Enfermeira, ola mundo";
	$find = strrpos($frase, "Enfermeira"); //pega 
	var_dump($find);

	$texto = substr($frase, $find); //mostra a frase a partir da posição 4 ($find)
	//resultado sera Enfermeira, ola Mundo
	echo $texto;

	echo "<p></p>";

	$email  = "jonas @ alessandrojonas.com.br";
	$arroba = strrpos($email, "@");
	var_dump($arroba);
	$dominio = substr($email, $arroba + 1);// substr("texto", "a partir daqui")
	echo '<br>'.$dominio; //resultado alessandrojonas.com.br
	//ou
	echo "<p></p>";	
	$dominio2 = substr($email, $arroba + strlen($arroba));// substr("texto", "a partir daqui")
	echo $dominio2;
	echo "<p></p>";	
	$quantidadecaracteres = strlen($email); //quantidade de caracteres
	echo $quantidadecaracteres;
	echo "<p></p>";	

	$dominio3 = substr($email, $arroba + strlen($arroba), 11);// substr("texto", "daqui", "até aqui")
	echo $dominio3;

	echo "<p></p>";	


	//Operador Ternario

	$qualasuaidade = 30;
	$idadeCrianca = 12;
	$idadeMaior = 18;
	$idadeMelhor = 65;

	//if idade for menor de idade menor "Menor de idade " senao "Maior de Idade"
	echo ($qualasuaidade < $idadeMaior ) ? "Menor de Idade " : "Maior de Idade";


	//Laço de Repetição

	for($i=0; $i <= $idade = 10; $i++){

		echo $i."ola mundo<br>";
	}

	echo "<p></p>";	
	
	for($i=0; $i <= $idade = 10; $i += 5){

		echo $i."ola mundo<br>";
	}

	echo "<p></p>";	

	echo '<hr>';
	
	//Pulou a 10 linhas
	for($i=0; $i <= $idade = 30; $i++){

		if($i > 15 && $i < 25 ) continue;

		echo $i."<br>";
	}


echo "<p></p>";	
	echo "<select>";	
	//2021 a 1980
	for( $i = date("Y"); $i >= date("Y")-41 ; $i--){

			echo '<option value="'.$i.'"> '.$i."</option>";
	}
	echo "</select>";

echo "<p></p>";	

	//FOREACH
	$meses = array("Janeiro", "Fevereiro", "Março", "Abril","Maio", "Junho", "Julho", "Agosto", 
					"Setembro","Outubro", "Novembro", "Dezembro");

	foreach($meses as $mes){

		echo "O mês é ".$mes.' | ';
	}

	echo '<p><hr></p>';



	//FOREACH com index
	foreach($meses as $index => $mes){

		echo "<br>O mes é ".' '.$mes;

		echo "<br> index  ".' '.$index;
	}

	
?>



<?php //FOREACH com $_GET ?>
<form>
	<input type="text" name="nome">
	<input type="date" name="nascimento">
	<input type="submit" value="ok">

</form>

<?php

		foreach($_GET as $key => $value){

			echo "Nome do campo: " . $key. '<br>';

			echo "Valor do campo: " . $value. '<br>';

			echo '<hr>';
		} 
		
		

//While
$condicao = true;

while ($condicao) {
			
			$numero = rand(1, 20);

			if($numero == 3){

				echo "Achei três Pare!!!";
				$condicao = false;
			}else{

				echo $numero .' - ';
			}

		}		


//Do while
/*
do {
	echo "20";
} while ($condicao) {
			$numero = rand(1, 20);
			if($numero == 3){
				echo "Achei três Pare!!!";
				$condicao = false;
			}else{
				echo $numero .' - ';
			}
		}
*/
echo '<p></p>';

//Array //Vetor

$frutas = array("maca","laranja","banana","limao"); //vetor
foreach($frutas as $index => $value){

	echo $value.'<br>';
}

print_r($frutas);


//array_push($array, '$variavel') //adicionar item no Array


echo '<p></p>';

//Array
$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";

$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";


echo $carros[0][2];

echo '<br>'.end($carros[1]);

echo '<p></p>';


$pessoas = array();

array_push($pessoas, array( 
		'nome' => 'Alessandro',
		'sobrenome' => 'Lourenco'
));

array_push($pessoas, array( 
		'nome' => 'Danila',
		'sobrenome' => 'Lourenco'
));



print_r($pessoas);
echo '<br>';
print_r($pessoas[0]);
echo '<br>';
print_r($pessoas[0]['nome']);
echo '<br>';
print_r($pessoas[0]['sobrenome']);
echo '<br>';
print_r($pessoas[1]['nome']);


echo '<p></p>';

//JASON
echo json_encode($pessoas);  //transforma array em json

echo '<p></p>';

$jason = '[{"nome":"Alessandro","sobrenome":"Lourenco"},{"nome":"Danila","sobrenome":"Lourenco"}]';
$data = json_decode($jason, true); //transforma json em array
var_dump($data);


//Constante
define("SERVIDOR","127.0.0.1"); //constante em letra maiuscula

echo SERVIDOR;


//Array Constante
define("BANCO_DE_DADOS",[
	'127.0.0.1',
	'root',
	'password',
	'teste'
]); //caso adicione true, a constante fica não sensitive

echo '<p></p>';

echo BANCO_DE_DADOS[1];

echo '<p></p>';

print_r(BANCO_DE_DADOS);


echo '<p></p>';

echo PHP_VERSION; //Descobrir a versão do PHP

echo '<p></p>';


//SESSÃO - SESSION
#session_start(); //iniciar sessão
//sessão salva um arquivo temporario na pasta do windows


require_once("inc/config.php");

$_SESSION["nome"] = "Alessandro";

session_regenerate_id(); //gera um novo id sa sessão

echo 'ID: '.session_id().'<br>'; //mostrar o id da sessão

echo '<a href="session.php">Ir para Sessão</a>';

var_dump($_SESSION);

echo '<p></p>';

echo session_save_path(); //pasta onde esta sendo salvo o arquivo temp

echo '<p></p>';

echo session_status();

#session_unset($_SESSION["nome"]); //limpar sessão, mas continua a mesma
#session_destroy(); //apaga a sessão

echo '<p></p>';
//Funções - função do usuário
//parametro obrigatorio deve ser primeiro
function texto($nome = "Alessandro"){

	return 'Ola: '.$nome;
}

echo texto().'<br>';

echo '<p></p>';

echo texto("Jonas").'<br>';

echo texto("").'<br>';

echo '<p></p>';

//passar varios Argumentos 
//não sabe ao certo quanto argumento ira passar
function ola(){

	$parametros = func_get_args();

	return $parametros;
}

$funcao = ola("Alessandro", "Jonas");
echo $funcao[0].' - ';
echo $funcao[1];

//Passar parametro por referencia, troca o valor da variavel
//& por referencia
$a = 10;

function trocaValor(&$b){

	$b += 50; 
	return $b;

}
echo '<p></p>';
echo trocaValor($a);
echo '<br>';
echo trocaValor($a);
echo '<br>';
echo $a;

echo '<p></p>';

//declaração de tipos escalares
function soma(float ...$valores):int{

	return array_sum($valores);
}

echo soma(2, 2);
echo '<br>';
echo soma(3, 3.5);
echo '<br>';
echo soma(12, 36);
echo '<br>';

echo '<p></p>';
//declaração de tipos escalares
function soma2(float ...$valores): float{

	return array_sum($valores);
}


echo '<br>';
echo soma2(3, 3.5);
echo '<p></p>';

echo '********************************** Funcoes Recursivas *****************************<br>';
//Funções Recursivas
$hierarquia = array(

	array(

			'nome_cargo' => 'CEO',
			'subordinado' => array(
				//inicio: Diretor Comercial
				array(
					'nome_cargo' => 'Diretor Comercial',
					//Inicio Gerente de Vendas
					'subordinado' => array(
						array(
							'nome_cargo' => 'Gerente de Vendas'	
						)
						//Termino Gerente de Vendas
					)
				),
				//Termino Comercial
				array(
					'nome_cargo' => 'Diretor Financeiro',
					'subordinado' => array(
						'nome_cargo' => 'Gerentes de Constas a pagar',
						'subordinado' => array(
							//inicio Supervisor
								array(
									'nome_cargo' => 'Supervisor de Pagamentos'
								)
							//Teermino Supervisor
						)
					)
				)
			)
	)

);


echo '<br>***************** funcao Anonima ***************************<br>';
function test($callback){

	$callback();
}

test(function(){

	echo "Terminou";
});


echo '<p></p>';

//jogar a função na variavel
$fn = function($a){

	#var_dump($a);
	echo $a;
};


$fn("ola Enfermeira");


echo '<p></p>';


echo '*********************** Date Time *********************************<br>';

echo date("d/m/Y");  //Date pega o idioma do servidor (ingles|Portugues)

echo '<p></p>';

echo date("d/m/Y H:i:s");  //Date pega o idioma do servidor (ingles|Portugues)

echo '<p></p>';

echo time();  //timesstamp segundo de 1970

echo '<p></p>';


//important

$ts = strtotime("2001-09-11"); //convert string em to time
echo date("l, d/m/Y", $ts);


echo '<p></p>';


$ts = strtotime("now"); //convert string em to time / Data atual
echo date("l, d/m/Y", $ts);

echo '<p></p>';

echo '<p></p>';

echo '*********************** Soma de Data *********************************<br>';

$ts = strtotime("+1 day"); //convert string em to time / Data atual + 1 dia
echo date("l, d/m/Y", $ts);

echo '<p></p>';

$ts = strtotime("+1 week"); //convert string em to time / Data atual + 1 semana
echo date("l, d/m/Y", $ts);


echo '<p></p>';

$ts = strtotime("+1 day + 1 hour"); //convert string em to time / Data atual + 1 dia + 1 hora
echo date("l, d/m/Y H:i:s", $ts);

echo '<p></p>';

echo '*********************** Data em Portugues  - Adicinar Data *********************************<br>';

//Definindo Regional
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese"); //data em Português

echo strftime("%A %B"); //data em Português


echo '<p></p>';

echo strftime("%A"); //Semana em Português

echo '<p></p>';

echo strftime("%B"); //MES em Português


echo '<p></p>';


echo  'Mes: '.ucfirst(strftime("%B")); //Semana em Português


echo '<p></p>';


$dt = new DateTime(); //ojeto Date Time //Classe Date Time

$periodo = new DateInterval("P5D"); //Adicionando 5 dias

echo $dt->format("d/m/Y H:i:s"); //acessando metodo

$dt->add($periodo);

echo '<p></p>';

echo $dt->format("d/m/Y H:i:s"); //acessando metodo

echo '<p></p>';









?>
