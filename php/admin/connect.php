<?php

/*
class Connect
{
    public $conn;
    public function __construct(){
        $this->conn = new PDO("pgsql:host=localhost;dbname=usuarios","postgres","root");
    }
}
*/
/*
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "search_games";
*/

    class Connect {

       
        public function __construct(){


            $servidor = "localhost";
            $usuario = "root";
            $senha = "";
            $dbname = "search_games";

	//Cria a conexao com o banco de dados
	//$this->connection = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
try{
    $this->connection = new PDO("mysql:host=localhost;dbname=search_games","root","");
    
}catch(Exception $e){
    echo $e->getMessage();
}
	if(!$this->connection){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "conexao realizada com sucesso";
	}
    }
}
 
?>

