<?php 

	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "search_games";

	//Criar a conexao com o banco de dados
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	} else{
		//echo "conexao realizada com sucesso";
	}


?>