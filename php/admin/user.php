<?php

require_once 'connect.php';

//$instance = new Connect();

Class User extends Connect
{
    protected $tabela;
    public $id;
    public $nome;
    public $email;
    public $senha;
    public $data_nascimento;
    public $telefone;


    public function getTabela(){
        return $this->tabela;
    }
    public function setTabela($tabela){
        $this->tabela = $tabela;
    }
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }

     public function getSenha(){
        return $this->senha;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }

     public function getData_nascimento(){
        return $this->data_nascimento;
    }
    public function setData_nascimento($data_nascimento){
        $this->data_nascimento = $data_nascimento;
    }

     public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
}


 ?>