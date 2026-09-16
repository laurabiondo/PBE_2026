<?php

$nome = $_POST['nome'];
$filme = $_POST['filme'];
$quantidade = $_POST['quantidade'];
$tipo = $_POST['tipo'];

if ($tipo == "inteira") {
    $valor_individual = 30;
} elseif ($tipo == "meia") {
    $valor_individual = 15;
}

$total = $valor_individual * $quantidade;

if ($quantidade > 10) {
    $total = $total - ($total * 0.10);
}

include "view_relatorio.php";

?>
