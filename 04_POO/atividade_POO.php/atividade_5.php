<?php 
class Turma { 
    private $nome; 
    private $professor; 
    private $qtdAlunos; 
    private $capacidade; 

    public function __construct($nome, $professor, $qtdAlunos = 0, $capacidade = 32) { 
        $this->nome = $nome; 
        $this->professor = $professor; 
        $this->qtdAlunos = $qtdAlunos; 
        $this->capacidade = $capacidade; 
    } 

    public function adicionarAluno() { 
        if ($this->qtdAlunos < $this->capacidade) { 
            $this->qtdAlunos++; 
            echo "Aluno adicionado!<br>"; 
        } else { 
            echo "Não há vagas!<br>"; 
        } 
    } 

    public function removerAluno() { 
        if ($this->qtdAlunos > 0) { 
            $this->qtdAlunos--; 
            echo "Aluno removido!<br>"; 
        } else { 
            echo "A turma já está vazia!<br>"; 
        } 
    } 

    public function exibirTurma() { 
        echo "Turma: " . $this->nome . "<br>"; 
        echo "Professor: " . $this->professor . "<br>"; 
        echo "Alunos: " . $this->qtdAlunos . "/" . $this->capacidade . "<br>"; 
    } 
} 

$turma = new Turma("PHP", "Leonardo", 25); 
$turma->exibirTurma(); 
?>
