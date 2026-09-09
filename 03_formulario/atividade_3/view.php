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
        <input type="number" name="numero1">
        <br>
         <label for ="">Numero:</label>
        <input type="number" name="numero2">
        <br>
   
        <button type="submit">Enviar</button>
    <br>
    <br>
            <select name = "operacao" required>
                <option value="">Selecione a conta</option>
                <option value="*">Multiplicação</option>
                <option value="+">Soma</option>
                <option value="-">Subtração</option>
                <option value="/">Divisão</option>
</select>
    

    </form>
</body>
</html>