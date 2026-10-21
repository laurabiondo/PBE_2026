<?php
class Pessoa {
    private $nome;
    private $idade;
    private $cidade;
    private $telefone;

    public function __construct($nome, $idade, $cidade, $telefone) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cidade = $cidade;
        $this->telefone = $telefone;
    }

    public function definirEndereco($cidade) {
        $this->cidade = $cidade;
    }

    public function definirTelefone($numero) {
        $this->telefone = $numero;
    }

    public function aniversario() {
        $this->idade++;
    }

    public function exibirPerfil() {
        echo "Nome:" . $this->nome . "<br>";
        echo "Idade:" . $this->idade . "<br>";
        echo "Cidade:" . $this->cidade . "<br>";
        echo "Telefone:" . $this->telefone . "<br>";
    }
}

$pessoa = new Pessoa("Laura", 17, "Tambaú", "(19)98609-1743");
$pessoa->exibirPerfil();

$pessoa->definirEndereco("Palmeiras");
$pessoa->definirTelefone("8888-8888");
$pessoa->aniversario();

echo "<br>";
$pessoa->exibirPerfil();

?>