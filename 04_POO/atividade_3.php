<?php
class Aula{
    public $disciplina;
    public $professor;
    public $duracao;
    public $numeroSala;
    public $bloco;

    public function exibirInformacoes()
    {
        echo "Disciplina: " . $this->disciplina . "<br>";
        echo "Professor: " . $this->professor . "<br>";
        echo "Duração: " . $this->duracao . "<br>";
        echo "Número da sala: " . $this->numeroSala . "<br>";
        echo "Bloco: " . $this->bloco . "<br>";
    }

    public function trocarProfessor($novoProfessor)
    {
        $this->professor = $novoProfessor;
    }
  
    public function alterarLocal($n_sala, $bloco)
    {
        $this->numeroSala = $n_sala;
        $this->bloco = $bloco;
    }
}

?>