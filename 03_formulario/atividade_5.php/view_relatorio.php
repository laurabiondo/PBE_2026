
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório</title>
</head>
<body>
    <h1>Resultado do IMC: </h1>
    <p>Nome: <?= $nome ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>Altura: <?= $altura ?></p>
    <p>IMC: <?= $imc ?></p>
    
    <?php if ($imc <= 18.5): ?>
        <p>Abaixo do peso</p>
    <?php elseif ($imc <= 24.9): ?>
        <p>Peso normal</p>
    <?php elseif ($imc <= 29.9): ?>
        <p>Sobrepeso</p>
    <?php else: ?>
        <p>Obesidade</p>
    <?php endif; ?>
</body>
</html>

