<?php
$arr = [
    "LAURA" => 9.0,
    "MANUELA" => 10,
    "MATEHUS" => 8,
    "PEDRO" => 7,
    "CAUA" =>5
];
echo "<pre>";
print_r($arr);
echo"</pre>";

foreach($arr as $posicao => $valor){
    echo "posição <strong> ". $posicao . "</strong Texto strong> " . $valor . "</strong>";
    echo "</br>";
}
if (count($arr) > 0) {
    $media = array_sum($arr) / count($arr);
    echo "A média é: " . $media;
}

?>