<?php

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$operacao = $_POST['operacao'];


if ($operacao == "+") {
    $resultado = $numero1 + $numero2;
    $operacao = "Soma";

}elseif ($operacao == "-") {
    $resultado = $numero1 - $numero2;
    $operacao = "Subtração";

}elseif ($operacao == "*") {
    $resultado = $numero1 * $numero2;
    $operacao = "Multiplicação";

}elseif ($operacao == "/") {
    $resultado = $numero1 / $numero2;
    $operacao = "Divisão";

}else {
    $resultado = "Operação inválida";
    $operacao = "Inválida";
}

echo "Operação: " . $operacao . " entre " . $numero1 . " e " . $numero2;
echo "<br>";
echo "Resultado: " . $resultado;

?>