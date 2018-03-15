<!DOCTYPE HTML>
<html>
	<head>
		<title>Search Games | Promoções e Descontos</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="assets/css/bootstrap.css" rel="stylesheet"/>
        <link href="style.css" rel="stylesheet"/>
	    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
	     	<link rel="stylesheet" type="text/css" href="cadastro.css" />
	    <link rel="shortcut icon" href="assets/ico/favicon.png">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">
	
			<header id="header">
				<div class="logo"><a href="index.html">Search <span>Games</span></a></div>
				<a href="#menu">MENU</a>
			</header>

			<nav id="menu">
				<ul class="links">
					<li><a href="\projeto/index.html">Página principal</a></li>
					<li><a href="cadastro.php">Cadastre-se</a></li>
					<li><a href="index.php">Login</a></li>
					<li><a href="\projeto/busca.html">Jogos</a></li>
					<li><a href="\projeto/ps4.html">PS4</a></li>
					<li><a href="\projeto/xboxone.html">Xbox One</a></li>
					<li><a href="\projeto/pc.html">PC</a></li>
					<li><a href="\projeto/nintendo.html">Nintendo</a></li>
					<!--<li><a href="contato.html">Contato</a></li>-->
					<br><div class="col-sm-14">
				</ul>				
			</nav>
	
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>Cadastre-se e ganhe um cupom de 30% de Desconto</p>
						<h2>Cadastro</h2>
					</header>
				</div>
			</section>

	
<!-- Conteudo do Menu -->
<br><center><h5><strong>*Campos com asteriscos são obrigatorios* </center></h5></strong>
  <form class="form-style-9" method="POST" action="processaUsuario.php">
   <ul>
    <li>
   <input type="text" name="nome_usuario" class="field-style field-full align-none" placeholder="* Nome" required />
   </li>
  <li>
     <input type="email" name="email_usuario" class="field-style field-full align-none" placeholder="* E-mail" required />
  </li>
  <li>
     <input type="password" name="senha_usuario" class="field-style field-full align-none" placeholder="* Senha" required />
  </li>
  <li>
     <input type="date" name="data_nascimento" class="field-style field-full align-none" placeholder="Data Nascimento" required />
  </li>
  <li>
    <input type="text" name="telefone_usuario" class="field-style field-full align-none" placeholder="Telefone" required />
  </li>
   
    <li>
     <input type="submit" value="Cadastrar" />
   </li>
  </ul>
</form>


	<!-- <form method="POST" action="processaUsuario.php">
		<div class="form-group">
			<label for="formGroupExampleInput">Nome:</label>
				<input type="text" name="txt_nome_usuario" class="form-control" placeholder="Digite seu Nome..."><br><br>
			</div>
		<div class="form-group">
			<label for="formGroupExampleInput">E-mail:</label>
				<input type="email" name="txt_email_usuario" class="form-control" placeholder="Digite seu Email..."><br><br>
			</div>		
		<div class="form-group">
			<label for="formGroupExampleInput">Senha:</label>
				<input type="password" name="senha_usuario" class="form-control" placeholder="Digite sua Senha..."><br><br>
			</div>
		<div class="form-group">
			<label for="formGroupExampleInput">Data de Nascimento:</label>
				<input type="date" class="form-control" name="data_nascimento"><br><br>
			</div>
		<div class="form-group">
			<label for="formGroupExampleInput">Telefone:</label>
				<input type="fone" name="telefone_usuario" class="form-control" placeholder="Digite seu Telefone..."><br><br>
		</div>

			<input type="submit" class="btn btn-primary" value="Cadastrar">
			</div>
		</form>
-->
	<!-- Rodapé -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					</ul>
				</div>
				<div class="copyright">
					&copy; Search Games. Todos os direitos reservados.
				</div>
			</footer>

		<!-- Script/Animações -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>