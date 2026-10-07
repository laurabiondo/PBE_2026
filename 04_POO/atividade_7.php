<?php

class ContaBancaria {
    public $titular;
    public $saldo;

    public function __construct($titular, $saldoInicial) {
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }
    public function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
        }
    }
    public function sacar($valor) {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
        }
    }

    public function exibirSaldo() {
        $saldoFormatado = ($this->saldo);
        echo "Titular: " . $this->titular . "  Saldo Atual: R$ " . $saldoFormatado . "\n";
    }
}
$minhaConta = new ContaBancaria("Laura", 1000.00);

$minhaConta->depositar(500.00);
$minhaConta->sacar(200.00);

$minhaConta->exibirSaldo();

?>
