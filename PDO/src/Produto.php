<?php

declare(strict_types=1);

class Produto
{
    private PDO $connection;
    
    public function __construct()
    {
        try {
            $this->connection = new PDO('mysql:host=localhost;dbname=mydatabase', 'root', '');
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }
        
    }
    
    public function list() : array
    {
        $sql = 'select * from produtos';
        
        $produtos = [];
        
        foreach ($this->connection->query($sql) as $key => $value)
        {
            array_push($produtos, $value);
        }
        
        return $produtos;
    }
    
    public function insert(string $descricao) : int
    {
        $sql = 'insert into produtos(descricao) values(?)';
        
        $prepare = $this->connection->prepare($sql);
        
        $prepare->bindParam(1, $descricao);
        $prepare->execute();
        
        return $prepare->rowCount();
    }
    
    public function update(string $descricao, int $id) : int
    {
        $sql = 'update produtos set descricao = ? where id = ?';
        
        $prepare = $this->connection->prepare($sql);
        
        $prepare->bindParam(1, $descricao);
        $prepare->bindParam(2, $id);
        
        $prepare->execute();
        
        return $prepare->rowCount();
    }
    
    public function delete(int $id) : int
    {
        $sql = 'delete from produtos where id = ?';
        
        $prepare = $this->connection->prepare($sql);
        
        $prepare->bindParam(1, $id);
        $prepare->execute();
        
        return $prepare->rowCount();
    }

}