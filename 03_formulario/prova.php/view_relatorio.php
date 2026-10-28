<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Contrato de Locação</title>
</head>
<body>
    <h1>Contrato de Locação</h1>
    
    <h3>Dados do Cliente</h3>
    <p><strong>Nome:</strong> <?php echo ($nome); ?></p>
    <p><strong>E-mail:</strong> <?php echo ($email); ?></p>
    
    <h3>Dados da Locação</h3>
    
    <h3>Adicionais Escolhidos</h3>
    <p><strong>Seguro total:</strong> <?php echo ($seguro); ?></p>
    <p><strong>GPS:</strong> <?php echo ($gps); ?></p>
    <p><strong>Cadeirinha infantil:</strong> <?php echo ($cadeirinha); ?></p>

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
                <td>Veículo (<?php echo ($nome_categoria_formatado); ?>)</td>
                <td>R$ <?php echo number_format($valor_diaria_veiculo, 2, ',', '.'); ?></td>
                <td><?php echo $dias; ?></td>
                <td>R$ <?php echo number_format($subtotal_veiculo, 2, ',', '.'); ?></td>
            </tr>
            <tr>
                <td>Adicionais</td>
                <td>R$ <?php echo number_format($diaria_adicionais, 2, ',', '.'); ?></td>
                <td><?php echo $dias; ?></td>
                <td>R$ <?php echo number_format($subtotal_adicionais, 2, ',', '.'); ?></td>
            </tr>
        </tbody>
    </table>

    <br>
    <p><strong>Total bruto:</strong> R$ <?php echo number_format($total_geral, 2, ',', '.'); ?></p>
    <p><strong>Desconto:</strong> R$ <?php echo number_format($valor_desconto, 2, ',', '.'); ?></p>
    <h2>Total a Pagar: R$ <?php echo number_format($total_a_pagar, 2, ',', '.'); ?></h2>

    <?php if ($percentual_desconto > 0): ?>
        <p>
            Parabéns! Você recebeu <?php echo $percentual_desconto; ?>% de desconto por escolher uma locação de longa duração!
        </p>
    <?php endif; ?>

</body>
</html>