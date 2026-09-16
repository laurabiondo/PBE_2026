<?php

$nome = $_POST['nome'];
$salario_bruto = $_POST['salario'];
$horas_extras = $_POST['Horas'];
$beneficios = $_POST['beneficios'];
$descontos = $_POST['descontos'];

echo "Nome: " . $nome;
echo "<br>";
echo "Salário Bruto: R$ " . $salario_bruto;
echo "<br>";

$valor_hora = $salario_bruto / 160;
$valor_hora_extra = $valor_hora * 1.5;
$total_horas_extras = $valor_hora_extra * $horas_extras;

$salario_bruto_sem_desconto = $salario_bruto + $total_horas_extras + $beneficios;

    echo "Salário Bruto + Total com horas Extras + Benefícios: R$ " . $salario_bruto_sem_desconto;
    echo "<br>";
    echo "Descontos: R$ " . $descontos;
    echo "<br>";

if ($salario_bruto >= 5000) {
    $imposto = $salario_bruto_sem_desconto * 0.10;
} elseif ($salario_bruto > 3000) {
    $imposto = $salario_bruto_sem_desconto * 0.05;
} else {
    $imposto = 0;
}
    echo "Imposto Aplicado: R$ " . $imposto;
    echo "<br>";

$salario_liquido = $salario_bruto_sem_desconto - $imposto - $descontos;
    echo "Salário Líquido: R$ " . $salario_liquido;
    echo "<br>";

if ($salario_liquido >= 4000) {
    echo "Status: Bem remunerado";
} else {
    echo "Status: Médio";
}

?>
    
       




    