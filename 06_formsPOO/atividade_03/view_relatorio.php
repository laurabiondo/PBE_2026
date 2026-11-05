
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Holerite</title>
</head>
<body>

    <h1>Holerite - TechNova</h1>

    <h3>Nome: <?= $funcionario->getNome(); ?></h3>

    <h3>Cargo: <?= $funcionario->getCargo(); ?></h3>

    <table border="1" >

        <tr>
            <th>Descrição</th>
            <th>Proventos</th>
            <th>Descontos</th>
        </tr>

        <tr>
            <td>Salário base</td>
            <td>R$ <?= number_format($funcionario->getSalarioBase(), 2, ',', '.'); ?></td>
            <td>-</td>
        </tr>

        <tr>
            <td>Horas extras (<?= $funcionario->getHorasExtras(); ?> horas)</td>
            <td>R$ <?= number_format($funcionario->calcularHorasExtras(), 2, ',', '.'); ?></td>
            <td>-</td>
        </tr>

        <tr>
            <td>INSS (<?= $funcionario->calcularPercentualINSS(); ?>%)</td>
            <td>-</td>
            <td>R$ <?= number_format($funcionario->calcularINSS(), 2, ',', '.'); ?></td>
        </tr>

        <tr>
            <td>Vale-transporte</td>
            <td>-</td>
            <td>R$ <?= number_format($funcionario->calcularValeTransporte(), 2, ',', '.'); ?></td>
        </tr>

    </table>

    <h2>
        Salário bruto:
        R$ <?= number_format($funcionario->calcularSalarioBruto(), 2, ',', '.'); ?>
    </h2>

    <h2>
        Salário líquido:
        R$ <?= number_format($funcionario->calcularSalarioLiquido(), 2, ',', '.'); ?>
    </h2>

    <br>

    <a href="view.php">Voltar</a>

</body>
</html>
