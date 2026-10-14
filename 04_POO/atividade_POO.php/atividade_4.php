<?php 
class Paciente { 
    private $nome; 
    private $idade; 
    private $peso; 
    private $altura; 

    public function __construct($nome, $idade, $peso, $altura) { 
        $this->nome = $nome; 
        $this->idade = $idade; 
        $this->peso = $peso; 
        $this->altura = $altura; 
    } 

    public function CalcularImc() { 
        return $this->peso / ($this->altura * $this->altura); 
    } 

    public function classificarImc() { 
        $imc = $this->CalcularImc();
        if ($imc < 18.5) { 
            echo "Baixo peso <br>"; 
        } elseif ($imc < 25) { 
            echo "Normal <br> "; 
        } else { 
            echo "Sobrepeso <br>"; 
        } 
    } 

    public function exibirficha() { 
        echo "Paciente: " . $this->nome . "<br>"; 
        echo "Idade: " . $this->idade . " anos<br>"; 
    } 
} 

$paciente = new Paciente("Laura", 17, 60, 1.65); 
$paciente->exibirficha(); 
$paciente->classificarImc(); 
echo "IMC: " . ($paciente->CalcularImc()) . "<br>"; 

?>
