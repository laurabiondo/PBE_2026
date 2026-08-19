<?php 
$frequencia = 80; 
$nota = 4; 

if ($frequencia < 75) { 
    echo "Reprovado! ❌"; 
} else { 
    if ($nota >= 9) { 
        echo "Aprovado!"; 
    } elseif ($nota >= 5 && $nota <= 6.9) { 
        echo "Recuperação"; 
    } else { 
        echo "Reprovado! ❌"; 
    } 
} 
echo "</br>";
$frequencia2 = 80; 
$nota = 5; 

if ($frequencia2 < 75) { 
    echo "Reprovado! ❌"; 
} else { 
    if ($nota >= 9) { 
        echo "Aprovado!"; 
    } elseif ($nota >= 5 && $nota <= 6.9) { 
        echo "Recuperação🙄"; 
    } else { 
        echo "Reprovado! ❌"; 
    } 
} 
echo "</br>";
$frequencia3 = 75; 
$nota = 9; 

if ($frequencia3 < 75) { 
    echo "Reprovado! ❌"; 
} else { 
    if ($nota >= 9) { 
        echo "Aprovado!"; 
    } elseif ($nota >= 5 && $nota <= 6.9) { 
        echo "Recuperação"; 
    } else { 
        echo "Reprovado! ❌"; 
    } 
} 
?>