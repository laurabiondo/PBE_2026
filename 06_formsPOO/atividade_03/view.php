
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerar Holerite</title>
</head>
<body>

    <h1>TechNova - Holerite</h1>

    <form action="logica.php" method="POST">

        <label>Nome do funcionário:</label>
        <input type="text" name="nome" required>
        <br><br>

        <label>Cargo:</label>
        <select name="cargo" required>
            <option value="">Selecione</option>
            <option value="Auxiliar">Auxiliar</option>
            <option value="Técnico">Técnico</option>
            <option value="Analista">Analista</option>
        </select>
        <br><br>

        <label>Horas extras no mês:</label>
        <input type="number" name="horasExtras" min="0" required>
        <br><br>

        <label>Utiliza vale-transporte?</label>
        <br>
        <input type="radio" name="valeTransporte" value="Sim" required> Sim
        <input type="radio" name="valeTransporte" value="Não" required> Não
        <br><br>

        <input type="submit" value="Gerar Holerite">

    </form>

</body>
</html>
