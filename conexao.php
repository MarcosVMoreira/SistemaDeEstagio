<?php 
	$host="localhost"; // endereço do servidor
	$user="root"; // nome de usuario
	$pass=""; //senha de acesso 
	$db="sistemaestagio"; // nome do banco de dados 
	$conexao = mysqli_connect($host,$user,$pass) or die('Não foi possivel conectar: '.mysqli_error());
	$selecao = mysqli_select_db($conexao,$db);
	mysqli_set_charset($conexao,"utf8");

	if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}

	mysqli_query($conexao, "SET NAMES iso-8859-1");
	mysqli_query($conexao, "SET CHARACTER_SET iso-8859-1");
?>