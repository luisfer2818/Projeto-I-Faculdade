<?php

require_once 'userdao.php';

$dao = new UserDAO;


if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
    $dao->setId($_REQUEST['id']);
    $dao->setNome($_REQUEST['nome']);
    $dao->setCnpj($_REQUEST['cnpj']);
    $dao->setPromocoes($_REQUEST['promocoes']);
    $dao->setTelefone($_REQUEST['telefone']);
     $dao->setProdutos($_REQUEST['produtos']);
}
$dao->update();

header('Location: index.php')


 ?>