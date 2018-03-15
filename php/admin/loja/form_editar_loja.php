<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title></title>
</head>
<body>
<?php
require_once 'userdao.php';

$dao = new UserDAO;
if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$usuario = $dao->findUnit($id);

 ?>

<!-- Menu -->
    <div class="container">
        <div class="topnav" id="myTopnav">
            <a href="index.php" class="active">Home</a>
            <a href="index.php">Usuarios</a>
            <a href="#">Lojas</a>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
    </div>

    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>

    <!-- Style Css do Menu -->
    <style>
        body {
            margin: 0;
            background-color: #ffffff;
        }
        
        .topnav {
            overflow: hidden;
            background-color: #ffffff;
        }
        
        .topnav a {
            float: left;
            display: block;
            color: #000000;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            font-size: 20px;
        }
        
        .topnav a:hover {
            background-color: #D3D3D3;
            color: black;
        }
        
        .active {
            background-color: #0275d8;
        }
        
        .topnav .icon {
            display: none;
        }
        
        @media screen and (max-width: 600px) {
            .topnav a:not(:first-child) {
                display: none;
            }
            .topnav a.icon {
                float: right;
                display: block;
            }
        }
        
        @media screen and (max-width: 600px) {
            .topnav.responsive {
                position: relative;
            }
            .topnav.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }
            .topnav.responsive a {
                float: none;
                display: block;
                text-align: left;
            }
        }
    </style>

     <!--Inicio do Cadastrar-->
     <legend style="text-align: center; margin-top: 70px;">Formulário de Alteração</legend><br>

<div class="container">
    
       <form  action="editar_loja.php" class="form-inline" method="post">

             <div class="form-group mx-sm-3">
                <input value="<?php echo $usuario['nome']?>" name="nome" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome">
                     </div>
            <div class="form-group">
                <input value="<?php echo $usuario['cnpj']?>" name="cnpj" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Cnpj">
                     </div>
            <div class="form-group mx-sm-3">
                 <input value="<?php echo $usuario['promocoes']?>" name="promocoes" type="text" class="form-control" id="exampleInputPassword1" placeholder="Promocoes">
                    </div>
            <div class="form-group mx-sm-3">
                        <input value="<?php echo $usuario['telfone']?>" name="telefone" type="number" class="form-control" id="exampleInputPassword1" placeholder="Telefone">
                </div>
                    <div class="form-group mx-sm-3">
                         <input value="<?php echo $usuario['produtos']?>" name="produtos" type="text" class="form-control" id="exampleInputPassword1" placeholder="Produtos">
                    </div>
                    <br><br><br><input name="cadastrar" type="submit" class="btn btn-success" value="Atualizar">
                    <input name="id" type="hidden" value="<?php echo $usuario['id']?>">
                </form>
          
         </div>
            <!-- Fim do cadastrar -->

</body>
</html>