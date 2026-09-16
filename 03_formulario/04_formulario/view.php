<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Formulário</title>
</head>
<body>
    <form action="processa.php" method="POST">
        <h1>Calculadora de salário </h1>
        <label for ="">Nome do funcionário:</label>
         <br>
        <input type="text" name="nome">
        <br>
        <br>
         <label for ="">Salário Bruto:</label>
          <br>
        <input type="number" name="salario">
        <br>
        <br>
        <label for ="">Horas Extras:</label>
         <br>
        <input type="number" name="Horas">
        <br>
        <br>
         <label for ="">Benefícios:</label>
          <br>
        <input type="number" name="beneficios">
        <br>
        <br>
        <label for ="">Descontos:</label>
         <br>
        <input type="number" name="descontos">
        <br>
        <br>
        <button type="submit">Calcular salário</button>
    </form>
</body>
</html>