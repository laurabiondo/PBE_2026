<?php
class Pedido {
    private $cliente;
    private $valorItens;

    public function __construct($cliente) {
        $this->cliente = $cliente;
        $this->valorItens = 0;
    }

    public function adicionarItem($valor) {
        $this->valorItens += $valor;
    }

    public function getTotal() {
        return $this->valorItens;
    }

    public function exibirPedido() {
        echo "Pedido";
        echo "Cliente: " . $this->cliente . "<br>";
    
    }
}

class NotaFiscal {
    private $totalPedido;
    private $imposto;
    private $totalPagar;

    public function __construct($totalPedido, $imposto = 10) {
        $this->totalPedido = $totalPedido;
        $this->imposto = $imposto;
        $this->totalPagar = 0;
    }

    public function calcularTotal() {
        $valorImposto = $this->totalPedido * ($this->imposto / 100);
        $this->totalPagar = $this->totalPedido + $valorImposto;
    }

    public function exibirNota() {
        $valorImposto = $this->totalPedido * ($this->imposto / 100);

        echo "Nota Fiscal";
        echo "Subtotal: R$ " . $this->totalPedido . "<br>";
        echo "Imposto aplicado: " . $this->imposto . "%" . "<br>";
        echo "Total a pagar: R$ " . $this->totalPagar . "<br>" ;
    }
}

$pedido = new Pedido("Laura");

$pedido->adicionarItem(100);
$pedido->adicionarItem(50);
$pedido->adicionarItem(25);

$pedido->exibirPedido();

$nota = new NotaFiscal($pedido->getTotal(), 12);

$nota->calcularTotal();
$nota->exibirNota();

?>