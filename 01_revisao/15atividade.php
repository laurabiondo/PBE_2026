<?php
$produtos = [
    ["nome" => "Camisa Básica", "preco" => 45.90],
    ["nome" => "Tênis Esportivo", "preco" => 250.00],
    ["nome" => "Boné", "preco" => 39.90],
    ["nome" => "Calça Jeans", "preco" => 120.00],
    ["nome" => "Meia", "preco" => 15.00]
];


foreach ($produtos as $produto) {

    if ($produto["preco"] < 100) {
        echo "Produto: " . $produto["nome"] ." --------- ". $produto ["preco"] ."<br>";
        
    }
}
?>