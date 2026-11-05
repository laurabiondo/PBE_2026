<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório</title>
</head>
<body>
    <h1>Produto Cadastrado</h1>
    <p>Nome:<?= $produto->getNome()?></p>

    <p>Nome:<?= $produto->getQuantidade()?></p>

    <p>Nome:<?= $produto->getPreco()?></p>

    <p>Total em estoque: <?=$produto->calcularTotal()?></p>

    <p>Desconto:<?= $produto->calcularDesconto()?></p>

    <p>Total:<?= $produto->calcularTotalComDesconto()?></p>

    <p>Estoque:<?= $produto->verificarEstoque()?></p>

    <?php
    if ($produto->calcularDesconto() > 0) {
    echo "<p>Parabéns! Você ganhou 10% de desconto.</p>";
        } else {
    echo "<p>Dica: comprando 10 unidades ou mais você ganha 10% de desconto.</p>";
}
    ?>

    <a href="view.php">Cadastrar Outro </a>
</body>
</html>