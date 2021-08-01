<?php

declare(strict_types=1);

class conta_bancaria
{
    // public - private - protected
    
    // delcaração do tipo de variável antes da versão 7.4 do PHP
    
    /**
     * @var string 
     */
    
    // delcaração do tipo de variável depois da versão 7.4 do PHP
    
    private string $banco;
    private string $nomeTitular;
    private string $numeroAgencia;
    private string $numeroConta;
    private float $saldo;
    
    public function __construct( // recebe valores e passa para a classe
        string $banco,
        string $nomeTitular,
        string $numeroAgencia,
        string $numeroConta,
        float $saldo
    ) 
    {
        // echo "método construtor";
        $this->banco = $banco; // atribuição
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }
    
    public function obterSaldo() : string
    {
        return 'Seu saldo atual é R$ '.$this->saldo;
    }
    
    public function depositar($valor) : string
    {
        $this->saldo += $valor;
        
        return 'Depósito de R$ '.$valor.' realizado com sucesso!';
    }
    public function sacar($valor) : string
    {
        $this->saldo -= $valor;
        
        return 'Saque de R$ '.$valor.' realizado com sucesso!';
    }
}

$conta = new conta_bancaria( // criando um objeto
    'Banco Teste', // banco
    'Mylla Korres', // nomeTitular
    '1234', // numeroAgencia
    '12345678-9', // numeroConta
    1000.00 // saldo
);
// exit();

var_dump($conta);
// var_dump($conta->nomeTitular);
// var_dump($conta->numeroAgencia);

// se for público dá para alterar fora da classe

// $conta->numeroAgencia = '56789';

// var_dump($conta->numeroAgencia);

echo PHP_EOL;

echo $conta->obterSaldo()."\n";

echo $conta->depositar(300.00)."\n";

echo $conta->obterSaldo()."\n";

echo $conta->sacar(150.00)."\n";

echo $conta->obterSaldo()."\n";