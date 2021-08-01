<?php

require 'Produto.php';

$produto = new Produto();

switch ($_GET['operation'])
{
    case 'list':
        echo '<h3>Produtos: </h3>';
        
        foreach ($produto->list() as $value)
        {
            echo 'Id: '.$value['id'].'<br>Descrição: '.$value['descricao'].'<hr>';
        }
        
        break;
        
    case 'insert':
        
        $status = $produto->insert('Produto3'); // nome do produto
        
        if(!$status)
        {
            echo "\nNão foi possível executar a operação!\n";
            return false;
        }
        
        echo "\nRegistro inserido com sucesso!\n";
        
        break;
        
    case 'update':
        
        $status = $produto->update('Produto03', 3); // nome do produto + id
        
        if(!$status)
        {
            echo "\nNão foi possível executar a operação!\n";
            return false;
        }
        
        echo "\nRegistro atualizado com sucesso!\n";
        
        break;
        
    case 'delete':
        
        $status = $produto->delete(3); // id do produto
        
        if(!$status)
        {
            echo "\nNão foi possível executar a operação!\n";
            return false;
        }
        
        echo "\nRegistro removido com sucesso!\n";
        
        break;
}