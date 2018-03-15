<?php


require_once 'user.php';


 class UserDAO extends User
{
    protected $tabela = 'cadastro';

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
        $sql = "INSERT INTO $this->tabela (nome, email, senha, data_nascimento, telefone) VALUES (:nome,:email,:senha,:data_nascimento,:telefone)";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(':nome',$this->nome, PDO::PARAM_STR);
        $stm->bindParam(':email',$this->email, PDO::PARAM_STR);
         $stm->bindParam(':senha',$this->senha, PDO::PARAM_STR);
          $stm->bindParam(':data_nascimento',$this->data_nascimento, PDO::PARAM_STR);
           $stm->bindParam(':telefone',$this->telefone, PDO::PARAM_STR);
        return $stm->execute();
    }
    public function update(){
        $sql = "UPDATE $this->tabela SET nome = :nome, email = :email, senha = :senha, data_nascimento = :data_nascimento, telefone = :telefone WHERE id = :id";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(':id', $this->id);
        $stm->bindParam(':nome', $this->nome);
        $stm->bindParam(':email', $this->email);
        $stm->bindParam(':senha', $this->senha);
        $stm->bindParam(':data_nascimento', $this->data_nascimento);
        $stm->bindParam(':telefone', $this->telefone);
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