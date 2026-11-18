
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Contrato de Matrícula</title>
</head>
<body>

    <h1>Contrato de Matrícula</h1>

    <table border="1">

        <tr>
            <th colspan="2">Dados do Aluno</th>
        </tr>

        <tr>
            <td>Nome</td>
            <td><?= $matricula->getAluno()->getNome() ?></td>
        </tr>

        <tr>
            <td>IMC</td>
            <td><?= number_format($matricula->getAluno()->calcularIMC(), 1, ",", ".") ?></td>
        </tr>

        <tr>
            <td>Classificação</td>
            <td><?= $matricula->getAluno()->classificarIMC() ?></td>
        </tr>

        <tr>
            <th colspan="2">Valores da Matrícula</th>
        </tr>

        <tr>
            <td>Plano escolhido</td>
            <td><?= $matricula->getPlano() ?></td>
        </tr>

        <tr>
            <td>Valor do plano</td>
            <td>R$ <?= number_format($matricula->calcularValorPlano(), 2, ",", ".") ?></td>
        </tr>

        <?php foreach ($matricula->getModalidades() as $modalidade) { ?>
        <tr>
            <td><?= $modalidade ?></td>
            <td>R$ <?= number_format($matricula->calcularValorModalidade($modalidade), 2, ",", ".") ?></td>
        </tr>
        <?php } ?>

        <tr>
            <td>Mensalidade total</td>
            <td>R$ <?= number_format($matricula->calcularMensalidade(), 2, ",", ".") ?></td>
        </tr>

    </table>

    <h2>Resumo do Contrato</h2>

    <p>
        <strong>Quantidade de meses:</strong>
        <?= $matricula->getMeses() ?>
    </p>

    <p>
        <strong>Subtotal:</strong>
        R$ <?= number_format($matricula->calcularSubtotal(), 2, ",", ".") ?>
    </p>

    <p>
        <strong>Desconto (<?= $matricula->calcularPercentualDesconto() ?>%):</strong>
        R$ <?= number_format($matricula->calcularDesconto(), 2, ",", ".") ?>
    </p>

    <h2>
        Total do contrato:
        R$ <?= number_format($matricula->calcularTotal(), 2, ",", ".") ?>
    </h2>

    <?php if ($matricula->calcularPercentualDesconto() > 0) { ?>

        <p>
            Parabéns! Você ganhou
            <?= $matricula->calcularPercentualDesconto() ?>% de desconto.
        </p>

    <?php } else { ?>

        <p>Dica: fechando 6 meses ou mais você ganha desconto.</p>

    <?php } ?>

</body>
</html>