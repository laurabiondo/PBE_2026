<?php

class Produto {
    private $nome;
    private $preco;
    private $estoque;

    public function __construct($nome, $preco, $estoque) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }

    public function vender($quantidade) {
        if ($quantidade <= $this->estoque) {
            $this->estoque -= $quantidade;
            echo "Unidades vendidas: ($quantidade) Venda realizada com sucesso! <br>";
        } else {
            echo "Estoque insuficiente para realizar a venda.<br>";
        }
    }

    public function reajustarPreco($percentual) {
        $this->preco += $this->preco * ($percentual / 100);
    }

    public function exibirInfo() {
        echo "Produto: $this->nome  Preço: R$ " . ($this->preco)   . "  Estoque: ($this->estoque) unidades<br>";
    }
}

$produto1 = new Produto("Teclado Gamer", 350, 10);
$produto1->vender(3);
$produto1->reajustarPreco(10);
$produto1->exibirInfo();
