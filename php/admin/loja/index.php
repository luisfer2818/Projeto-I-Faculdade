
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'userdao.php';

$dao = new UserDAO;
/*
var_dump($dao->findAll());
die;*/
 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet">
         <title></title>
         <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">

            <style>
        .form{
            margin-left: 200px;
            margin-right: 200px;
            padding-top: 50px;
        }
        input.cadastro{
            height: 53px;
        }
        .nome-nome{
            margin-left:10px;
        }
         </style>
         
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
         <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
         <script>
            $(document).ready(function(){
                $('#table-rs').DataTable();
            });
         </script>
    </head>


    <body>

        <!-- Menu -->
    <div class="container">
        <div class="topnav" id="myTopnav">
            <a href="index.php" class="active">Home</a>
            <a href="\loja/index.php">Usuarios</a>
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

    <!--Cadastro-->

    <!--Inicio do Cadastrar-->
       <!-- <div class="form">
        <legend style="text-align: center; margin-top: 90px;"><h2>Cadastro</h2></legend>
                <form  action="cadastrar_usuario.php" class="form-inline" method="post">
                    <div style="margin-left: 700px;padding-top: 10px;padding-right: 10px;" class="nome-nome input-group">
                            <span class="input-group-addon glyphicon glyphicon-user"><p>Nome: </p></span>
                            <input name="nome" type="text" class="form-control" required>
                    </div>
                    <div style="padding-top: 10px;padding-right: 10px;" class="email-email input-group">
                            <span class="input-group-addon"><p style="text-align: center;">Email: </p></span>
                            <input name="email" type="email" class="form-control">
                    </div>
                     <div style="padding-top: 10px;padding-right: 10px;" class="email-email input-group">
                            <span class="input-group-addon"><p style="text-align: center;">Senha: </p></span>
                            <input name="senha" type="password" class="form-control">
                    </div>
                     <div style="padding-top: 10px;padding-right: 10px;" class="email-email input-group">
                            <span class="input-group-addon"><p style="text-align: center;">Data Nascimento: </p></span>
                            <input name="data_nascimento" type="date" class="form-control">
                    </div>
                     <div style="padding-top: 10px;padding-right: 10px;" class="email-email input-group">
                            <span class="input-group-addon"><p style="text-align: center;">Telefone: </p></span>
                            <input name="telefone" type="number" class="form-control">
                    </div>
                    <div class="3d" style="padding-top: 10px;">
                            <input name="cadastrar" type="submit" class="cadastro btn btn-success" value="Cadastrar">
                    </div>
                </form>
            </div> -->
<br><br><br><br><br><br>
<legend style="text-align: center; margin-top: -80px;">Formulario de Cadastro</legend><br>
 <div class="container">
    <div class="row">
        <form class="form-inline" action="cadastrar_loja.php" method="POST">

              <div class="form-group mx-sm-3">
                <input name="nome" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome">
                     </div>
            <div class="form-group">
                <input name="cnpj" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Cnpj">
                     </div>
            <div class="form-group mx-sm-3">
                 <input name="promocoes" type="text" class="form-control" id="exampleInputPassword1" placeholder="Promocoes">
                    </div>
            <div class="form-group mx-sm-3">
                        <input name="telefone" type="number" class="form-control" id="exampleInputPassword1" placeholder="Telefone">
                </div>
                    <div class="form-group mx-sm-3">
                         <input name="produtos" type="text" class="form-control" id="exampleInputPassword1" placeholder="Produtos">
                    </div>
                    <br><br><br><input name="cadastrar" type="submit" class="btn btn-success" value="Cadastrar">

                </form>
             </div>
         </div>
            <!-- Fim do cadastrar -->


            <div class="form">
                <table class="table" id="table-rs">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Cnpj</th>
                            <th>Promocoes</th>
                            <th>Telefone</th>
                            <th>Produtos</th>
                            <th></th>
                        </tr>
                     </thead>
                    <tbody>
                    <?php foreach ($dao->findAll() as $key => $value): ?>
                        <tr>
                            <td><?php echo $key+1 ?></td>
                            <td><?php echo $value['nome'] ?></td>
                            <td><?php echo $value['cnpj'] ?></td>
                              <td><?php echo $value['promocoes'] ?></td>
                                <td><?php echo $value['telefone'] ?></td>
                                  <td><?php echo $value['produtos'] ?></td>
                            <td>
                                <a href="form_editar_loja.php?id=<?php echo $value['id'] ?>" class="btn btn-primary" onlick="alterar(nome,email,senha,data_nascimento,telefone);">Editar</a>
                                <a href="excluir_loja.php?id=<?php echo $value['id'] ?>" class= "btn btn-danger">Excluir</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
<br><br>
    </body>
</html>