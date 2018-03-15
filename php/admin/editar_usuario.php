<?php

require_once 'userdao.php';

$dao = new UserDAO;


if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
    $dao->setId($_REQUEST['id']);
    $dao->setNome($_REQUEST['nome']);
    $dao->setEmail($_REQUEST['email']);
    $dao->setSenha($_REQUEST['senha']);
    $dao->setData_nascimento($_REQUEST['data_nascimento']);
    $dao->setTelefone($_REQUEST['telefone']);
}
$dao->update();

header('Location: index.php')


 ?>