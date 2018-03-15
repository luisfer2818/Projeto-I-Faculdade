<?php

require_once 'connect.php';

//$instance = new Connect();

Class User extends Connect
{
    protected $tabela;
    public $id;
    public $nome;
    public $cnpj;
    public $promocoes;
    public $telefone;
    public $produtos;


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
    public function getCnpj(){
        return $this->cnpj;
    }
    public function setCnpj($cnpj){
        $this->cnpj = $cnpj;
    }
    public function getPromocoes(){
        return $this->promocoes;
    }
    public function setPromocoes($promocoes){
        $this->promocoes = $promocoes;
    }

     public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

     public function getProdutos(){
        return $this->produtos;
    }
    public function setProdutos($produtos){
        $this->produtos = $produtos;
    }


}

 ?>