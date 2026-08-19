<?php 
function Maioridade($idade){ 
    if ($idade >= 18){ 
        return "Maior de idade"; 
    } else { 
        return "Menor de idade"; 
    } 
} 
$idade1= 16;
$idade1= 19;
$idade1= 13;

$resultado = Maioridade(16) . "<br>"; 
    echo "A idade $idade1 é $resultado";
$resultado = Maioridade(19) . "<br>"; 
    echo "A idade $idade1 é $resultado";
$resultado = Maioridade(13) . "<br>"; 
    echo "A idade $idade1 é $resultado";
?>