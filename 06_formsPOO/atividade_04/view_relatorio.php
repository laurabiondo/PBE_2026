
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Contrato de Matrícula</title>
</head>
<body>

    <h1>Contrato de Matrícula - PowerFit</h1>

    <h2>Dados do Aluno</h2>

    <p>
        <strong>Nome:</strong>
        <?= $matricula->getAluno()->getNome() ?>
    </p>

    <p>
        <strong>IMC:</strong>
        <?= number_format($matricula->getAluno()->calcularIMC(), 1, ",", ".") ?>
    </p>

    <p>
        <strong>Classificação:</strong>
        <?= $matricula->getAluno()->classificarIMC() ?>
    </p>

    <hr>

    <h2>Valores da Matrícula</h2>

    <table border="1" cellpadding="10">

        <tr>
            <th>Descrição</th>
            <th>Valor mensal</th>
        </tr>

        <tr>
            <td>Plano <?= $matricula->getPlano() ?></td>
            <td>R$ <?= number_format($matricula->calcularValorPlano(), 2, ",", ".") ?></td>
        </tr>

        <?php foreach ($matricula->getModalidades() as $modalidade) { ?>

            <tr>
                <td><?= $modalidade ?></td>
                <td>R$ <?= number_format($matricula->calcularValorModalidade($modalidade), 2, ",", ".") ?></td>
            </tr>

        <?php } ?>

        <tr>
            <th>Mensalidade</th>
            <th>R$ <?= number_format($matricula->calcularMensalidade(), 2, ",", ".") ?></th>
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
    