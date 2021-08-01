<?php

/*
 *  EXERCÍCIO
 *  
 *  Crie uma classe chamada "Blog" com as seguintes funcionalidades (métodos):
 *  Listagem, inclusão, edição e exclusão de posts.
 *  A conexão com a base de dados pode ser realizada no método construtor da classe.
 *  Crie um arquivo responsável por tratar as operações e realizar de fato a chamada 
 *  para cada operação (método) da classe de persistência.
 */

require 'Blog.php';

$post = new Blog();

switch ($_GET['operation'])
{
    case 'list':
        echo '<h3>Posts: </h3>';
        
        foreach ($post->list() as $value)
        {
            echo 'Id: '.$value['id'].'<br>Título: '.$value['titulo'].'<br>Descrição: '.$value['descricao'].'<br>Data: '.$value['data'].'<hr>';
        }
        
        break;
        
    case 'insert':
        
        $status = $post->insert('Post02', 'Este é o segundo post.', '01/08/2021'); // título, descrição, data
        
        if(!$status)
        {
            echo "\nNão foi possível executar a operação!\n";
            return false;
        }
        
        echo "\nRegistro inserido com sucesso!\n";
        
        break;
        
    case 'update':
        
        $status = $post->update('Post_02', 'Este post foi alterado.', 2); // título + descrição + id
        
        if(!$status)
        {
            echo "\nNão foi possível executar a operação!\n";
            return false;
        }
        
        echo "\nRegistro atualizado com sucesso!\n";
        
        break;
        
    case 'delete':
        
        $status = $post->delete(2); // id do post
        
        if(!$status)
        {
            echo "\nNão foi possível executar a operação!\n";
            return false;
        }
        
        echo "\nRegistro removido com sucesso!\n";
        
        break;
}