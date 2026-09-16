
<?php

$nome = $_POST['nome'];
$peso = $_POST['peso'];
$altura = $_POST['altura'];

$imc = $peso / ($altura * $altura) ;


require_once "View_relatorio.php";

?>

