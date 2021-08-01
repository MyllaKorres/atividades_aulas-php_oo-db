<?php

/*
 *  EXERCÍCIO
 *
 *  Crie uma classe chamada "Venda" com os atributos privados "data", "produto", "quantidade",
 *  e "valorTotal". Crie um método capaz de exibir os dados da venda. Crie uma instância da
 *  classe e passe os atributos através de um método construtor, em seguida, invoque o método
 *  responsável por exibir o conteúdo da venda devidamente formato.
 */

class venda
{
    private string $data;
    private string $prod;
    private int $quant;
    private float $vtot;
    
    public function __construct(
        string $data,
        string $prod,
        int $quant,
        float $vtot
        )
    {
        $this->data = $data;
        $this->prod = $prod;
        $this->quant = $quant;
        $this->vtot = $vtot;
    }
    
    public function mostraProd() : void
    {
        echo "Detalhes da venda:\n\n";
        echo "\tData: ".$this->data."\n";
        echo "\tProduto: ".$this->prod."\n";
        echo "\tQuantidade: ".$this->quant."\n";
        echo "\tValor Total: R$ ".$this->vtot."\n";
    }
}

$venda = new venda('30/07/2021', 'Pipoca', 3, 15.75);

$venda->mostraProd();