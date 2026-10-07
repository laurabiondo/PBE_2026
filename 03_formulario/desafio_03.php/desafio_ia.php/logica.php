<?php
/**
 * ==============================================================================
 * TITANIUM FITNESS - LÓGICA DE PROCESSAMENTO E SIMULAÇÃO MENSAL/ANUAL
 * ==============================================================================
 */

// Redireciona se for acessado diretamente via GET na URL
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.html');
    exit;
}

/*
    --------------------------------------------------------------------------
    1. RECEBIMENTO E SANITIZAÇÃO DOS DADOS
    --------------------------------------------------------------------------
*/
$nome     = trim(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'Aluno');
$idade    = max(0, (int)(filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT) ?? 0));
$plano    = filter_input(INPUT_POST, 'plano', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'basico';
$meses    = max(1, (int)(filter_input(INPUT_POST, 'meses', FILTER_SANITIZE_NUMBER_INT) ?? 1));
$treino   = filter_input(INPUT_POST, 'treino', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'iniciante';
$personal = filter_input(INPUT_POST, 'personal', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'nao';

/*
    --------------------------------------------------------------------------
    2. TABELAS DE CONFIGURAÇÃO (ARRAYS ASSOCIATIVOS)
    --------------------------------------------------------------------------
*/
$planos = [
    "basico"  => 80.00,
    "premium" => 120.00,
    "vip"     => 180.00
];

$nomes_planos = [
    "basico"  => "Plano Básico",
    "premium" => "Plano Premium",
    "vip"     => "Plano VIP"
];

$treinos = [
    "iniciante"     => "Treino Iniciante",
    "hipertrofia"   => "Treino Hipertrofia",
    "emagrecimento" => "Treino Emagrecimento",
    "avancado"      => "Treino Avançado"
];

/*
    --------------------------------------------------------------------------
    3. PROCESSAMENTO DOS DADOS
    --------------------------------------------------------------------------
*/
$valor_plano = $planos[$plano] ?? $planos['basico'];
$nome_plano  = $nomes_planos[$plano] ?? "Plano Básico";
$nome_treino = $treinos[$treino] ?? "Treino Iniciante";

// Valor base mensal por mês
$valor_personal_mensal = ($personal === "sim") ? 50.00 : 0.00;
$mensalidade_sem_desconto = $valor_plano + $valor_personal_mensal;

// Subtotal do contrato completo
$subtotal = $mensalidade_sem_desconto * $meses;

/*
    --------------------------------------------------------------------------
    4. CÁLCULO DE DESCONTO POR FIDELIDADE
    --------------------------------------------------------------------------
    - 12 meses ou mais = 15%
    - 6 meses a 11 meses = 10%
    - Menos de 6 meses = 0%
*/
$porcentagem_desconto = 0;

if ($meses >= 12) {
    $porcentagem_desconto = 15;
} elseif ($meses >= 6) {
    $porcentagem_desconto = 10;
}

$desconto = $subtotal * ($porcentagem_desconto / 100);
$total    = $subtotal - $desconto;

/*
    --------------------------------------------------------------------------
    5. FORMATAÇÃO MONETÁRIA
    --------------------------------------------------------------------------
*/
$valor_plano_formatado = number_format($valor_plano, 2, ",", ".");
$desconto_formatado    = number_format($desconto, 2, ",", ".");
$total_formatado       = number_format($total, 2, ",", ".");
$mensal_com_desconto   = number_format($total / $meses, 2, ",", ".");

/*
    --------------------------------------------------------------------------
    6. RESPOSTA INTERATIVA (JSON VS VIEW TRADICIONAL)
    --------------------------------------------------------------------------
*/
$is_ajax = !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && 
           strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';

if ($is_ajax) {
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode([
        'success'              => true,
        'nome'                 => $nome,
        'idade'                => $idade,
        'plano_id'             => $plano,
        'nome_plano'           => $nome_plano,
        'valor_plano'          => $valor_plano,
        'valor_plano_format'   => $valor_plano_formatado,
        'nome_treino'          => $nome_treino,
        'meses'                => $meses,
        'personal'             => $personal,
        'subtotal'             => $subtotal,
        'porcentagem_desconto' => $porcentagem_desconto,
        'desconto'             => $desconto,
        'desconto_format'      => $desconto_formatado,
        'total'                => $total,
        'total_format'         => $total_formatado,
        'mensal_final_format'  => $mensal_com_desconto
    ]);
    exit;
}

// Renderização tradicional caso o JS esteja desativado
require_once "view_relatorio.php";
?>