<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

var_dump($_POST);

require_once 'userdao.php';

$dao = new UserDAO;
$dao->setNome($_POST['nome']);
$dao->setCnpj($_POST['cnpj']);
$dao->setPromocoes($_POST['promocoes']);
$dao->setTelefone($_POST['telefone']);
$dao->setProdutos($_POST['produtos']);
$dao->insert();

header('Location: index.php');
 ?>

 <!--infinity/reginaldo/portao danificado/92971986-->