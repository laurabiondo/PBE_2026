<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
     <form action="logica.php" method="POST">
        <label for ="">Nome:</label>
        <input type="text" name="nome">

        <br>
        <br>
         <label for ="">Email:</label>
        <input type="email" name="Email">

        <br><br>

         <label for ="">Senha:</label>
        <input type="password" name="Senha">
        <br>
        <br>
        <button type="submit">Cadastrar</button>
         <button type="reset">Limpar</button>
    </form>
</body>
</html>