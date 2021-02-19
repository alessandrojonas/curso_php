<?php

	session_start();

	echo 'Nome: '.$_SESSION["nome"].'<br>';
	echo "Depois do session_unset()<br>";
	session_unset($_SESSION["nome"]);
	echo 'Nome: '.$_SESSION["nome"].'<br>';
	

?>


