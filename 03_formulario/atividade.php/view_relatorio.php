
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resumo da Compra</title>
</head>
<body>

    <h1>Resumo da Compra</h1>

    <p><strong>Cliente:</strong> <?= $nome ?></p>

    <table border="1">
        <thead>
            <tr>
                <th>Produto</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Subtotal</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($produtos as $produto): ?>
                <tr>
                    <td><?= $produto['nome'] ?></td>
                    <td>R$ <?= number_format($produto['preco'], 2, ',', '.') ?></td>
                    <td><?= $produto['quantidade'] ?></td>
                    <td>R$ <?= number_format($produto['subtotal'], 2, ',', '.') ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <br>

    <p><strong>Total da compra:</strong>R$ <?= number_format($total, 2, ',', '.') ?></p>

    <?php if ($desconto > 0): ?>

        <p><strong>Desconto:</strong>R$ <?= number_format($desconto, 2, ',', '.') ?></p>

        <h2>🎉 Parabéns! Você recebeu 10% de desconto.</h2>

    <?php else: ?>

        <p><strong>Desconto:</strong>R$ 0,00</p>

        <p>Obrigado pela sua compra!</p>

    <?php endif ?>

    <h2>Total final: R$ <?= number_format($totalFinal, 2, ',', '.') ?></h2>

</body>
</html>
