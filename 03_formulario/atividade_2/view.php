<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero</title>
</head>
<body>
    <form action="logica.php" method = "POST">
        <label for ="">Numero:</label>
        <input type="number" name="numero">
        <button type="submit">Enviar</button>
            <select name = "Selecionar conta" required>
                <option value="">Selecione a conta</option>
                <option value="*">Multiplicação</option>
                <option value="+">Soma</option>
                <option value="-">Subtração</option>
                <option value="/">Divisão</option>
</select>


    </form>
</body>
</html>