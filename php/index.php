<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Cesar Szpak">
    <link rel="icon" href="assets/imagens/favicon.png">

    <title>Search Games - Login</title>

        <link href="style.css" rel="stylesheet"/>
      <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />

    <link href="css/bootstrap.css" rel="stylesheet">

    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <link href="css/signin.css" rel="stylesheet">

    <script src="js/ie-emulation-modes-warning.js"></script>

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
            <p>Login de usuario</p>
            <h2>Login</h2>
          </header>
        </div>
      </section>


    <div class="container">
<br><br><br>
      <form class="form-signin" method="POST" action="valida.php">
        <h3 class="form-signin-heading">LOGIN</h3>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
        <select name="tipo_usuario">
                <option value="">Selecione</option>
                <option name="usuario" value="1">Usuario</option>
                <option name="usuario" value="2">Administrador</option>
            </select><br />
        <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button>
      </form>
	  <p class="text-center text-danger">
			<?php if(isset($_SESSION['loginErro'])){
				echo $_SESSION['loginErro'];
				unset($_SESSION['loginErro']);
			}?>
		</p>
		<p class="text-center text-success">
			<?php 
			if(isset($_SESSION['logindeslogado'])){
				echo $_SESSION['logindeslogado'];
				unset($_SESSION['logindeslogado']);
			}
			?>
		</p>
    </div> <!-- /container -->
<br><br><br>

   
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
       <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

  </body>
</html>