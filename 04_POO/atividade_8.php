<?php 
class Funcionario {
    private $nome; 
    private $salario; 

      public function __construct($nome, $salario = 1000) { 
        $this->nome = $nome; 
        $this->salario = $salario; 
    } 
   
    public function aumentarSalario($percentual) { 
        
        if ($percentual > 0 && $percentual <= 10) { 
            $this->salario += $this->salario * ($percentual / 100);
            echo "Aumento permitido!<br>"; 
        } else { 
            echo "Aumento Negado!<br>"; 
        } 
    } 

        public function exibirSalario() {
        echo "Funcionário: " . $this->nome . " - Salário: R$ " . number_format($this->salario, 2, ','',''.') . "<br>";
    }
} 
$funcionario1 = new Funcionario("Laura", 300); 
$funcionario1->aumentarSalario(10); 
$funcionario1->exibirSalario();    
?>
