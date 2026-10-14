<?php 
class Filme { 
    private $titulo; 
    private $genero; 
    private $duracao; 
    private $assistido; 

    public function __construct($titulo, $genero, $duracao, $assistido = false) { 
        $this->titulo = $titulo; 
        $this->genero = $genero; 
        $this->duracao = $duracao; 
        $this->assistido = $assistido; 
    } 

    public function marcarComoAssistido($assistido = true) { 
        $this->assistido = $assistido; 
    } 

    public function foiAssistido() { 
        if ($this->assistido) { 
            echo "Assistido: Sim<br>"; 
        } else { 
            echo "Assistido: Não<br>"; 
        } 
    } 

    public function exibirResumo() { 
        echo "Titulo: " . $this->titulo . "<br>"; 
        echo "Genero: " . $this->genero . "<br>"; 
        echo "Duração: " . $this->duracao . " min<br>"; 
       
    } 
} 

$Filme1 = new Filme("Harry Potter", "Ficção", 200); 
$Filme1->marcarComoAssistido(); 
$Filme1->foiAssistido(); 
$Filme1->exibirResumo();
echo"-------------------------------------------<br>";
$Filme2 = new Filme("Matrix", "Ficção", 145); 
$Filme2->marcarComoAssistido(); 
$Filme2->foiAssistido(); 
$Filme2->exibirResumo();
?>
