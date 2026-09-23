<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Relatório da Matrícula</title>
</head>

<body style="background-color:black; color: #FFF; text-align: center;">
    <img  src="logo.png" width="15%">
    <header>
        <br>
        <h2 style="text-align:center">Informações da matrícula</h2>
        <br>
    </header>
   
    <p  style="text-align:center;"><b>Nome:</b> <?= $nome ?></p>

    <p style="text-align:center;"><b>Idade:</b> <?= $idade ?> anos</p>

    <p style="text-align:center;"><b>Plano:</b> <?= $nome_plano ?></p>

    <p style="text-align:center;"><b>Quantidade de meses:</b> <?= $meses ?></p>

    <p style="text-align:center;"><b>Personal Trainer:</b> <?= $personal == "sim" ? "Sim" : "Não" ?></p>

    <p style="text-align:center;"><b>Valor do plano:</b> R$ <?= ($valor_plano) ?></p>

    <p style="text-align:center;"><b>Desconto:</> R$ <?= ($desconto) ?></p>
<hr>
    <h2 style="text-align:center;">
        Total da matrícula:
        R$ <?=($total) ?>
    </h2>

    <?php if ($meses >= 12) { ?>

        <p style="text-align:center;">🎉 Você recebeu 15% de desconto!</p>

    <?php } elseif ($meses >= 6) { ?>

        <p style="text-align:center;">🎉 Você recebeu 10% de desconto!</p>

    <?php } else { ?>

        <p style="text-align:center;">Você não recebeu desconto.</p>

    <?php } ?>

</body>

</html>