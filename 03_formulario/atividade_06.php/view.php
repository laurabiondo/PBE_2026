
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra de Ingressos</title>
</head>

<body>

    <h1>Compra de Ingressos</h1>

    <form action="logica.php" method="POST">

        <label>Nome do cliente:</label>
        <br>
        <input type="text" name="nome">
        <br><br>

        <label>Filme:</label>
        <br>
        <input type="text" name="filme">
        <br><br>

        <label>Quantidade de ingressos:</label>
        <br>
        <input type="number" name="quantidade">
        <br><br>

        <label>Tipo de ingresso:</label>
        <br>
        <input type="radio" name="tipo" value="inteira">
        Inteira
        <br>
        <input type="radio" name="tipo" value="meia">
            Meia-entrada
        <br><br>
        
        <button type="submit">Comprar Ingressos</button>

    </form>

</body>

</html>
