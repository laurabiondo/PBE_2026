
<?php

$nome = $_POST['nome'];

// Produto 1
$produto1 = $_POST['produto1'];
$preco1 = $_POST['preco1'];
$quantidade1 = $_POST['quantidade1'];

// Produto 2
$produto2 = $_POST['produto2'];
$preco2 = $_POST['preco2'];
$quantidade2 = $_POST['quantidade2'];

// Produto 3
$produto3 = $_POST['produto3'];
$preco3 = $_POST['preco3'];
$quantidade3 = $_POST['quantidade3'];

// Lista de produtos
$produtos = [
    [
        "nome" => $produto1,
        "preco" => $preco1,
        "quantidade" => $quantidade1,
        "subtotal" => $preco1 * $quantidade1,
    ],
    [
        "nome" => $produto2,
        "preco" => $preco2,
        "quantidade" => $quantidade2,
        "subtotal" => $preco2 * $quantidade2,
    ],
    [
        "nome" => $produto3,
        "preco" => $preco3,
        "quantidade" => $quantidade3,
        "subtotal" => $preco3 * $quantidade3,
    ]
];

// Calcula o subtotal de cada produto
$total = 0;

foreach ($produtos as $produto) {
    $total += $produto['subtotal'];
}

// Verifica se existe desconto
$desconto = 0;

if ($total > 500) {
    $desconto = $total * 0.10;
}

// Calcula o total final
$totalFinal = $total - $desconto;

// Exibe o relatório
require_once "view_relatorio.php";

?>
