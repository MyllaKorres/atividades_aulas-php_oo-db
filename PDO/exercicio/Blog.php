<?php

declare(strict_types=1);

class Blog
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
        $sql = 'select * from posts';
        
        $post = [];
        
        foreach ($this->connection->query($sql) as $key => $value)
        {
            array_push($post, $value);
        }
        
        return $post;
    }
    
    public function insert(string $titulo, string $descricao, string $data) : int
    {
        $sql = 'insert into posts (titulo, descricao, data) values(?, ?, ?)';
        
        $prepare = $this->connection->prepare($sql);
        
        $prepare->bindParam(1, $titulo);
        $prepare->bindParam(2, $descricao);
        $prepare->bindParam(3, $data);
        
        $prepare->execute();
        
        return $prepare->rowCount();
    }
    
    public function update(string $titulo, string $descricao, int $id) : int
    {
        $sql = 'update posts set titulo = ?, descricao = ? where id = ?';
        
        $prepare = $this->connection->prepare($sql);
        
        $prepare->bindParam(1, $titulo);
        $prepare->bindParam(2, $descricao);
        $prepare->bindParam(3, $id);
        
        $prepare->execute();
        
        return $prepare->rowCount();
    }
    
    public function delete(int $id) : int
    {
        $sql = 'delete from posts where id = ?';
        
        $prepare = $this->connection->prepare($sql);
        
        $prepare->bindParam(1, $id);
        $prepare->execute();
        
        return $prepare->rowCount();
    }
}