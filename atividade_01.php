<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Contrato de Locação</title>
</head>
<body>
    <h1>Contrato de Locação</h1>
    
    <h3>Dados do Cliente</h3>
    <p><strong>Nome:</strong> <?php echo $nome; ?></p>
    <p><strong>E-mail:</strong> <?php echo $email; ?></p>
    
    <h3>Dados da Locação</h3>
    <p><strong>Data de retirada:</strong> <?php echo date($data_retirada); ?></p>
    
    <h3>Adicionais Escolhidos</h3>
    <p><strong>Seguro total:</strong> <?php echo $seguro; ?></p>
    <p><strong>GPS:</strong> <?php echo $gps; ?></p>
    <p><strong>Cadeirinha infantil:</strong> <?php echo $cadeirinha; ?></p>

    <h3>Resumo Financeiro</h3>
    <table border="1">
        <thead>
            <tr>
                <th>Item</th>
                <th>Diária</th>
                <th>Dias</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Veículo (<?php echo $nome_categoria_formatado; ?>)</td>
                <td>R$ <?php echo ($valor_diaria_veiculo ); ?></td>
                <td><?php echo $dias; ?></td>
                <td>R$ <?php echo ($subtotal_veiculo); ?></td>
            </tr>
            <tr>
                <td>Adicionais</td>
                <td>R$ <?php echo ($diaria_adicionais); ?></td>
                <td><?php echo $dias; ?></td>
                <td>R$ <?php echo ($subtotal_adicionais); ?></td>
            </tr>
        </tbody>
    </table>

    <br>
    <p><strong>Total bruto:</strong> R$ <?php echo ($total_geral); ?></p>
    <p><strong>Desconto:</strong> R$ <?php echo ($valor_desconto); ?></p>
    <h2>Total a Pagar: R$ <?php echo ($total_a_pagar); ?></h2>

    <hr>

    <?php if ($percentual_desconto > 0): ?>
        <p style="color: green; font-weight: bold;">
            Parabéns! Você recebeu <?php echo $percentual_desconto; ?>% de desconto por escolher uma locação de longa duração!
        </p>
    <?php else: ?>
        <p style="color: blue;">
            Dica AutoFácil: Alugando veículos por 7 dias ou mais você ganha descontos progressivos de até 20%!
        </p>
    <?php endif; ?>

    <br>
    <a href="view.php">Nova Locação</a>
</body>
</html>
