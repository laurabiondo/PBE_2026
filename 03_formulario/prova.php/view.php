<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Locadora - Novo Contrato</title>
</head>
<body>
    <h1>Cadastro de Locação</h1>
    
    <form action="logica.php" method="POST">
        
        <h3>Dados do Cliente</h3>
        <label>Nome:</label><br>
        <input type="text" name="nome" required><br><br>

        <label>E-mail:</label><br>
        <input type="email" name="email" required><br><br>
        
        <h3>Dados da Locação</h3>
        
        <label>Quantidade de Dias:</label><br>
        <input type="number" name="dias" min="1" required><br><br>
        
        <label>Categoria do Veículo:</label><br>
        <select name="categoria" required>
            <option value="">Selecione uma categoria...</option>
            <option value="Economico">Econômico - R$ 100,00</option>
            <option value="Intermediario">Intermediário - R$ 150,00</option>
            <option value="SUV">SUV - R$ 250,00</option>
            <option value="Seguro total">Seguro total - R$ 40,00</option>
            <option value="gps">GPS - R$ 15,00</option>
            <option value="cadeirinha">Cadeirinha infantil - R$ 20,00</option>
            
        </select><br><br>
        
        <h3>Adicionais</h3>
        <p>Seguro Total (R$ 40,00/dia):</p>
        <input type="radio" name="seguro" value="Sim" required> Sim
        <input type="radio" name="seguro" value="Nao" required> Não<br><br>
        
        <p>GPS (R$ 15,00/dia):</p>
        <input type="radio" name="gps" value="Sim" required> Sim
        <input type="radio" name="gps" value="Nao" required> Não<br><br>
        
        <p>Cadeirinha Infantil (R$ 20,00/dia):</p>
        <input type="radio" name="cadeirinha" value="Sim" required> Sim
        <input type="radio" name="cadeirinha" value="Nao" required> Não<br><br>
        
        <button type="submit">Gerar Contrato</button>
        
    </form>
</body>
</html>