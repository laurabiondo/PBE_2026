
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Compra de Produtos</title>
</head>
<body>

    <form action="logica.php" method="POST">

        <h2>Dados do Cliente</h2>

        <label>Nome:</label><br>
        <input type="text" name="nome" required>
        <br><br>

        <h2>Produto 1</h2>

        <label>Nome do produto:</label><br>
        <input type="text" name="produto1" required>
        <br><br>

        <label>Preço:</label><br>
        <input type="number" name="preco1" step="0.01" required>
        <br><br>

        <label>Quantidade:</label><br>
        <input type="number" name="quantidade1" min="1" required>
        <br><br>

        <h2>Produto 2</h2>

        <label>Nome do produto:</label><br>
        <input type="text" name="produto2" required>
        <br><br>

        <label>Preço:</label><br>
        <input type="number" name="preco2" step="0.01" required>
        <br><br>

        <label>Quantidade:</label><br>
        <input type="number" name="quantidade2" min="1" required>
        <br><br>

        <h2>Produto 3</h2>

        <label>Nome do produto:</label><br>
        <input type="text" name="produto3" required>
        <br><br>

        <label>Preço:</label><br>
        <input type="number" name="preco3" step="0.01" required>
        <br><br>

        <label>Quantidade:</label><br>
        <input type="number" name="quantidade3" min="1" required>
        <br><br>

        <button type="submit">Finalizar Compra</button>

    </form>

</body>
</html>
