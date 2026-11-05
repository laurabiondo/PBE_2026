
<?php

require_once "Aluno.php";
require_once "Matricula.php";

// Recebendo os dados do aluno
$nome = $_POST["nome"];
$peso = $_POST["peso"];
$altura = $_POST["altura"];

// Recebendo os dados da matrícula
$plano = $_POST["plano"];
$meses = $_POST["meses"];


$modalidades = [];

if (isset($_POST["modalidades"])) {
    $modalidades = $_POST["modalidades"];
}

$aluno = new Aluno($nome, $peso, $altura);

$matricula = new Matricula($aluno, $plano, $meses, $modalidades);

require_once "view_relatorio.php";

?>
