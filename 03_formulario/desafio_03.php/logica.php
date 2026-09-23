<?php

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$plano = $_POST['plano'];
$meses = $_POST['meses'];
$personal = $_POST['personal'];

$planos = [
    "basico" => 80,
    "premium" => 120,
    "vip" => 180
];

function calcularTotal($valor_plano, $meses, $personal)
{
    $total = $valor_plano * $meses;

    if ($personal == "sim") {
        $total = $total + (50 * $meses);
    }

    return $total;
}
function nomePlano($plano)
{
    if ($plano == "basico") {
        return "Plano Básico";
    } elseif ($plano == "premium") {
        return "Plano Premium";
    } else {
        return "Plano VIP";
    }
}
foreach ($planos as $nomePlano => $valor) {

    if ($plano == $nomePlano) {
        $valor_plano = $valor;
    }
}
$total = calcularTotal($valor_plano, $meses, $personal);
if ($meses >= 12) {

    $desconto = $total * 0.15;
    $total = $total - $desconto;
} elseif ($meses >= 6) {

    $desconto = $total * 0.10;
    $total = $total - $desconto;
} else {
    $desconto = 0;
}
$nome_plano = nomePlano($plano);
require_once "view_relatorio.php";

?>
