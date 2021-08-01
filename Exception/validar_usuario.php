<?php

function validar_usuario(array $usuario)
{
    if (empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade']))
    {
        // return false; // (1)
        
        throw new Exception("Campos obrigatórios não foram preenchidos!\n"); // (2) (3)
    }
    
    return true;
}

$usuario = [
    'codigo' => 1,
    'nome' => '',
    'idade' => 57,
];

// $usuario_valido = validar_usuario($usuario); // (1)
// validar_usuario($usuario); // (2)

$status = false;

try // (3) (4)
{
    $status = validar_usuario($usuario);
}
catch (Exception $e) // (3) (4)
{
    echo $e->getMessage();
    // die(); // (3)
}
finally // (4)
{
    echo "Status da operação: ".(int)$status;
    die(); // (4)
}

/*
if(!$usuario_valido) // (1)
{
    echo "Usuário inválido!";
    return false;
}
*/

echo "\n... executando ...\n";