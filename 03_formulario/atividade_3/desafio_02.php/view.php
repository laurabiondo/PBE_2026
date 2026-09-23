<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de compra</title>
</head>

<body>

    <h1>Carrinho de compra</h1>
    <h1>Dados do cliente</h1>    
    <form action="logica.php" method="POST">

        <label>Nome do cliente:</label>
        <br>
        <input type="text" name="nome">
        <br><br>

    <h1> produto 1 </h1>
        <label>Nome do produto:</label>
        <br>
        <input type="text" name="produto1">
        <br><br>

        <label>Preço:</label>
        <br>
        <input type="number" name="preco1">
        <br><br>

        <label>Quantidade:</label>
        <br>
        <input type="number" name="quantidade1">
        <br><br>

        <h1> produto 2 </h1>
        <label>Nome do produto:</label>
        <br>
        <input type="text" name="produto2">
        <br><br>

        <label>Preço:</label>
        <br>
        <input type="number" name="preco2">
        <br><br>

        <label>Quantidade:</label>
        <br>
        <input type="number" name="quantidade2">
        <br><br>

         <h1> produto 3 </h1>
        <label>Nome do produto:</label>
        <br>
        <input type="text" name="produto3">
        <br><br>

        <label>Preço:</label>
        <br>
        <input type="number" name="preco3">
        <br><br>

        <label>Quantidade:</label>
        <br>
        <input type="number" name="quantidade3">
        <br><br>
        
        <button type="submit">Finalizar compra</button>

    </form>

</body>

</html>
