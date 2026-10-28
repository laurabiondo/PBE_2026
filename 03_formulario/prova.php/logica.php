<?php
//Laura Biondo e Cauã Henrik
$nome          = $_POST['nome'];
$email         = $_POST['email'];
$data_retirada = $_POST['data_retirada'];
$dias          = $_POST['dias'] ;
$categoria     = $_POST['categoria'];
$seguro     = $_POST['seguro'];
$gps        = $_POST['gps'];
$cadeirinha = $_POST['cadeirinha'];

function calcularSubtotal($diaria, $dias) {
    return $diaria * $dias;
}

function calcularPercentualDesconto($dias) {
    if ($dias >= 15) {
        return 20;
    } elseif ($dias >= 7) {
        return 10;
    } else {
        return 0;
    }
}

if ($categoria == "Economico") {
    $valor_diaria_veiculo = 100.00;
    $nome_categoria_formatado = "Econômico";
} elseif ($categoria == "Intermediario") {
    $valor_diaria_veiculo = 150.00;
    $nome_categoria_formatado = "Intermediário";
}elseif ($categoria == "SUV") {
    $valor_diaria_veiculo = 150.00;
    $nome_categoria_formatado = "SUV";
} elseif ($categoria == "seguro") {
    $valor_diaria_veiculo = 250.00;
    $nome_categoria_formatado = "seguro";
} elseif ($categoria == "gps") {
    $valor_diaria_veiculo = 150.00;
    $nome_categoria_formatado = "gps";
}elseif ($categoria == "cadeirinha") {
    $valor_diaria_veiculo = 150.00;
    $nome_categoria_formatado = "cadeirinha";
} else {
    $valor_diaria_veiculo = 0.00;
    $nome_categoria_formatado = "Não Informado";
}

$diaria_adicionais = 0.00;

if ($seguro == "Sim") {
    $diaria_adicionais += 40.00;
}
if ($gps == "Sim") {
    $diaria_adicionais += 15.00;
}
if ($cadeirinha == "Sim") {
    $diaria_adicionais += 20.00;
}


$subtotal_veiculo = calcularSubtotal($valor_diaria_veiculo, $dias);
$subtotal_adicionais = calcularSubtotal($diaria_adicionais, $dias);


$total_geral = $subtotal_veiculo + $subtotal_adicionais;

$percentual_desconto = calcularPercentualDesconto($dias);
$valor_desconto = $total_geral * ($percentual_desconto / 100);

$total_a_pagar = $total_geral - $valor_desconto;

require_once "view_relatorio.php";
?>