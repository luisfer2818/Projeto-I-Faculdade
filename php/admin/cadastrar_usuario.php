<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

var_dump($_POST);

require_once 'userdao.php';

$dao = new UserDAO;
$dao->setNome($_POST['nome']);
$dao->setEmail($_POST['email']);
$dao->setSenha($_POST['senha']);
$dao->setData_nascimento($_POST['data_nascimento']);
$dao->setTelefone($_POST['telefone']);
$dao->insert();

header('Location: index.php');
 ?>
