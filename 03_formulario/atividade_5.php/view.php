
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de IMC</title>
</head>
<body>

    <h1>Calculadora de IMC</h1>

    <form action="logica.php" method="post">
        <label>Nome:</label>
        <br><br>
        <input type="text" name="nome">
        <br><br>

        <label>Peso em kg:</label>
        <br><br>
        <input type="number" name="peso">
        <br><br>

        <label>Altura em metros:</label>
        <br><br>
        <input type="number" name="altura" step="0.01">
        <br><br>

        <button type="submit">Calcular</button>

    </form>

</body>
</html>

