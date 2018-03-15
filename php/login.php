<?php
  session_start();
?>

<!DOCTYPE HTML>
<html>
  <head>
    <title>Search Games | Promoções e Descontos</title>
      <link rel="stylesheet" href="login.js" />
      <link rel="stylesheet" type="text/css" href="login.css" />
    </head>
  <body>

<div class="login-page">
  <div class="form">
    <form class="register-form" method="POST" action="valida.php">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form">
      <input type="text" placeholder="E-mail"/>
      <input type="password" placeholder="Senha"/>
      <input type="submit" class="button" value="Cadastrar">
      <p class="message">Não está registrado? <a href="cadastro.php">Crie uma conta</a></p>
    </form>
  </div>
</div>

      <p class="text-center-danger">
        <?php if(isset($_SESSION['loginErro'])){
          echo $_SESSION['loginErro'];
          unset($_SESSION['loginErro']);
        } ?>

</body>
</html>