<?php

/*
 *  EXERCÍCIO
 *  
 *  Crie uma função chamada divisao() que deverá receber dois números.
 *  Na função, verifique se algum dos números passados por parâmetro é 
 *  igual a 0 (zero), caso positivo, lance uma exceção.
 *  
 *  Em seguida, escreva um algoritmo responsável por executar a função 
 *  divisao() forçando-a lançar a exceção (passando 0 em algum parâmetro)
 *  e realize o tratamento e captura através do Try Catch Finally.
*/

function divisao(int $num1, int $num2) : float
{
    if($num1 == 0 || $num2 == 0)
    {
        throw new Exception("Valor inválido! Digite um número diferente de zero!\n");
    }
    
    return $num1/$num2;
}

$status = false;

try 
{
    $status = divisao(0, 2);
} 
catch (Exception $e) 
{
    echo $e->getMessage();
}
finally 
{
    echo "\nStatus da operação: ".(float)$status;
}