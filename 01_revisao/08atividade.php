<?php
$numero1 = 10;
$numero2 = 20;
$operacao1 = "/";

    
switch($operacao1){
case '+':
    $resultado = $numero1 + $numero2;
    echo "O resultado da adição é: " . $resultado;
    echo "</br>";
    break;
case '-':
    $resultado = $numero1 - $numero2;
    echo "O resultado da subtração é: " . $resultado;
    echo "</br>";
    break;
case '*':
    $resultado = $numero1 * $numero2;
    echo "O resultado da multiplicação é: " . $resultado;
    echo "</br>";
    break;
case '/':
    $resultado = $numero1 / $numero2;
    echo "O resultado da divisão é: " . $resultado;
    echo "</br>";
    break;
}




?>