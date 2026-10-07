<?php

class Pedido
{
    public $numero;
    public $cliente;
    public $valor;
    public $status;
    public function adicionarItem($valor)
    {
        $this->valor += $valor;
    }
    public function cancelar()
    {
        $this->status = "Cancelado";
    }
    public function finalizar()
    {
        $this->status = "Finalizado";
    }
    public function exibirResumo()
    {
        echo "Número: " . $this->numero . "<br>";
        echo "Cliente: " . $this->cliente . "<br>";
        echo "Valor: R$ " . $this->valor . "<br>";
        echo "Status: " . $this->status . "<br>";
      
    }
}

$pedido1 = new Pedido();

$pedido1->numero = 1;
$pedido1->cliente = "Laura";
$pedido1->valor = 100;
$pedido1->status = "Aguardando";

$pedido1->adicionarItem(50);
$pedido1->finalizar();

$pedido2 = new Pedido();

$pedido2->numero = 2;
$pedido2->cliente = "Maria";
$pedido2->valor = 200;
$pedido2->status = "Aguardando";

$pedido2->adicionarItem(80);
$pedido2->cancelar();

$pedido1->exibirResumo();

$pedido2->exibirResumo();

?>