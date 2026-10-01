<?php 
class ContaBancaria { 
    public $titular; 
    public $numero; 
    public $saldo = 0; 
    public $tipo; 

    function exibirTitular() { 
        echo $this->titular . "<br>"; 
    } 

    function depositar($valor) { 
        if ($valor > 0) { 
            $this->saldo += $valor; 
            echo "Dinheiro depositado com sucesso! Novo saldo: " . $this->saldo . "<br>"; 
        } else { 
            echo "O valor do depósito deve ser maior que zero.<br>"; 
        } 
    } 

    function sacar($valor) { 
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor; 
            echo "Saque de $valor realizado! O saldo atual é: $this->saldo<br>"; 
        } else {
            echo "Saldo insuficiente ou valor de saque inválido.<br>";
        }
    } 

    function consultarSaldo() { 
        echo "O valor do saldo é $this->saldo<br>"; 
    } 
} 


$ContaBancaria1 = new ContaBancaria(); 
$ContaBancaria1->titular = "Laura"; 
$ContaBancaria1->numero = "19 98609-1743"; 
$ContaBancaria1->saldo = 99; 
$ContaBancaria1->tipo = "Poupança"; 

echo "Titular: " . $ContaBancaria1->titular . "<br>"; 
echo "Número: " . $ContaBancaria1->numero . "<br>"; 
echo "Saldo: " . $ContaBancaria1->saldo . "<br>"; 
echo "Tipo: " . $ContaBancaria1->tipo ; 

$ContaBancaria1->depositar(10);
$ContaBancaria1->sacar(20);
$ContaBancaria1->consultarSaldo();

$ContaBancaria2 = new ContaBancaria(); 
$ContaBancaria2->titular = "Laura"; 
$ContaBancaria2->numero = "19 98609-17-43"; 
$ContaBancaria2->saldo = 500; 
$ContaBancaria2->tipo = "Conta Corrente"; 

echo "Titular: " . $ContaBancaria2->titular . "<br>"; 
echo "Número: " . $ContaBancaria2->numero . "<br>"; 
echo "Saldo: " . $ContaBancaria2->saldo . "<br>"; 
echo "Tipo: " . $ContaBancaria2->tipo; 


$ContaBancaria2->depositar(100);
$ContaBancaria2->sacar(200);
$ContaBancaria2->consultarSaldo();
?>


