<?php 

class Livro { 
    public $titulo; 
    public $autor; 
    public $paginas; 
    public $ano_publicacao; 

    public function __construct($titulo, $autor, $paginas, $ano_publicacao = "Sem descrição") { 
          $this->titulo = $titulo; 
        $this->autor = $autor; 
        $this->paginas = $paginas; 
        $this->ano_publicacao = $ano_publicacao; 
    } 
    public function exibirDetalhes() { 
        echo "O título: " . $this->titulo . "  Autor: " . $this->autor . "  Páginas: " . $this->paginas . "  Ano de publicação: " . $this->ano_publicacao; 
    } 
} 

$livro = new Livro("Dom Casmurro", "Machado de Assis", 256, 1899); 
$livro = new Livro("Como ser programador", "Laura Biondo de Oliveira", 256, 1450); 

$livro->exibirDetalhes();

?>