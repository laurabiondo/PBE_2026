<?php
function analisarNotas($nota1, $nota2, $nota3) {
    $media = ($nota1 + $nota2 + $nota3) / 3;
    $maior = max($nota1, $nota2, $nota3);
    $menor = min($nota1, $nota2, $nota3);

    if ($media >= 7) {
        $situacao = "Aprovado";
    } elseif ($media >= 5) {
        $situacao = "Recuperação";
    } else {
        $situacao = "Reprovado";
    }

    return [
        "media" => $media,
        "maior" => $maior,
        "menor" => $menor,
        "situacao" => $situacao
    ];
}
$resultado = analisarNotas(8, 7, 9);

echo "Média: " . $resultado["media"] . "<br>";
echo "Maior nota: " . $resultado["maior"] . "<br>";
echo "Menor nota: " . $resultado["menor"] . "<br>";
echo "Situação: " . $resultado["situacao"];

?>