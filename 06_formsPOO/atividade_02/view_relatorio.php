
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Boletim Escolar</title>
</head>
<body>

    <h1>Boletim Escolar</h1>

    <h3>Nome: <?= $aluno->getNome(); ?></h3>
    <h3>Turma: <?= $aluno->getTurma(); ?></h3>

    <table border="1">

        <tr>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Nota 3</th>
            <th>Média</th>
        </tr>

        <tr>
            <td><?= $aluno->getNota1(); ?></td>
            <td><?= $aluno->getNota2(); ?></td>
            <td><?= $aluno->getNota3(); ?></td>
            <td><?= number_format($aluno->calcularMedia(), 1, ',', '.'); ?></td>
        </tr>

    </table>

    <p>
        <strong>Faltas:</strong>
        <?= $aluno->getFaltas(); ?>
    </p>

    <p>
        <strong>Frequência:</strong>
        <?= number_format($aluno->calcularFrequencia(), 1, ',', '.'); ?>%
    </p>

    <h2>
        Situação: <?= $aluno->verificarSituacao(); ?>
    </h2>

    <?php
        if ($aluno->verificarSituacao() == "Aprovado") {
            echo "Parabéns, continue assim!";
        } else {
            echo "Atenção: procure o professor para saber os próximos passos.";
        }
    ?>

</body>
</html>
