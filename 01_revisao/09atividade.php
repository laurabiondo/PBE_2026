<?php
$idade = 15;
$acompanhado = true; 

if ($idade >= 18) {
    echo "Entrada liberada! A pessoa pode entrar sozinha.✅";
} elseif ($idade >= 14 && $idade <= 17) {
    if ($acompanhado) {
        echo "Entrada liberada! A pessoa está acompanhada por um adulto.✅";
    } else {
        echo "Entrada negada! Menores de 14 a 17 anos precisam estar acompanhados.❌";
    }
} else {
    echo "Entrada negada! Menores de 14 anos não podem entrar.❌❌❌";
}
   
?>