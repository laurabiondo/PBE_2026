<?php 
function AnalisandoNumero($numero) { 
    return [ 
        "numero" => $numero, 
        "dobro" => $numero * 2, 
        "triplo" => $numero * 3, 
        "quadrado" => $numero * $numero
    ]; 
} 

$resultado = AnalisandoNumero(5); 

echo "Dobro: " . $resultado["dobro"] . "<br>"; 
echo "Triplo: " . $resultado["triplo"] . "<br>"; 
echo "Número: " . $resultado["numero"] . "<br>"; 
echo "Quadrado: " . $resultado["quadrado"]; 
?>