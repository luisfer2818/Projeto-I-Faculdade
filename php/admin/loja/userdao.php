<?php


require_once 'user.php';


 class UserDAO extends User
{
    protected $tabela = 'loja_parceira';

    public function findUnit($id){
        $sql = "SELECT * FROM $this->tabela where id = :id";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function findAll(){
        $sql = "SELECT * FROM $this->tabela order by nome asc";
        $stm = $this->connection->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
    public function insert(){
        $sql = "INSERT INTO $this->tabela (nome,cnpj, promocoes, telefone, produtos) VALUES (:nome,:cnpj,:promocoes,:telefone,:produtos)";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(':nome',$this->nome, PDO::PARAM_STR);
        $stm->bindParam(':cnpj',$this->cnpj, PDO::PARAM_STR);
         $stm->bindParam(':promocoes',$this->promocoes, PDO::PARAM_STR);
          $stm->bindParam(':telefone',$this->telefone, PDO::PARAM_STR);
           $stm->bindParam(':produtos',$this->produtos, PDO::PARAM_STR);
        return $stm->execute();
    }
    public function update(){
        $sql = "UPDATE $this->tabela SET nome = :nome, cnpj = :cnpj, promocoes = :promocoes, telefone = :telefone, produtos = :produtos WHERE id = :id";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(':id', $this->id);
        $stm->bindParam(':nome', $this->nome);
        $stm->bindParam(':cnpj', $this->cnpj);
        $stm->bindParam(':promocoes', $this->promocoes);
        $stm->bindParam(':telefone', $this->telefone);
        $stm->bindParam(':produtos', $this->produtos);
        return $stm->execute();
    }
    public function delete($id){
        $sql = "DELETE FROM $this->tabela WHERE id = :id";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(':id', $id, PDO::PARAM_INT);
        return $stm->execute();
    }

}


 ?>