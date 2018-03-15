<?php

	include_once("conecta.php");
	$nome_usuario = $_POST['nome_usuario'];
	$email_usuario = $_POST['email_usuario'];
	$senha_usuario = $_POST['senha_usuario'];
	$data_nasc_usuario = $_POST['data_nascimento'];
	$telefone_usuario = $_POST['telefone_usuario'];

	//echo "$nome_usuario - $email_usuario";
	$result_usuario = "INSERT INTO cadastro (nome, email, senha, data_nascimento, telefone) VALUES 
	('$nome_usuario', '$email_usuario', '$senha_usuario', '$data_nasc_usuario', '$telefone_usuario')";
	$resultado_usuario = mysqli_query($conn, $result_usuario);


	if(mysqli_affected_rows($conn) != 0){
		echo "
			<META HTTP-EQUIV-REFRESH CONTENT = '0;URL=http://localhost/loja/admin/administrador.php?link=2'>
			<script>
					alert(\"Usuario cadastrado com sucesso.\");
			</script>			
		";
		}else {
			echo "
				<META HTTP-EQUIV-REFRESH CONTENT = '0;URL=http://localhost/search/php/cadastro.php'>
				<script type=\"text/javascript\">
					alert(\"O Usuario não foi cadastrado com sucesso.\");
				</script>
			";
	}
	header("Location:index.php");
?>