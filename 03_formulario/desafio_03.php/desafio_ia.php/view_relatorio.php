<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Permite usar acentos -->
    <meta charset="UTF-8">

    <!-- Adapta a página para celular -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Título da página -->
    <title>IRON FIT - Relatório da Matrícula</title>

    <!-- Fonte Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Ícones FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary-color: #ff003c;
            --primary-hover: #d60032;
            --bg-color: #f4f6f9;
            --card-bg: #ffffff;
            --text-color: #1a1d24;
            --text-muted: #5e6675;
            --border-color: #e2e8f0;
            --success-color: #10b981;
            --accent-bg: #f8fafc;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-color);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px 15px;
        }

        .receipt-card {
            background-color: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 20px;
            width: 100%;
            max-width: 550px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            animation: slideUp 0.4s ease-out;
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .receipt-header {
            background: linear-gradient(135deg, #1a1d24 0%, #2b303c 100%);
            color: #ffffff;
            padding: 30px;
            text-align: center;
            position: relative;
        }

        .receipt-header img {
            max-width: 120px;
            height: auto;
            margin-bottom: 12px;
            filter: drop-shadow(0 0 6px rgba(255, 0, 60, 0.4));
        }

        .receipt-header .success-badge {
            background-color: rgba(16, 185, 129, 0.2);
            color: #34d399;
            border: 1px solid rgba(16, 185, 129, 0.4);
            padding: 6px 16px;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .receipt-header h1 {
            font-size: 1.8rem;
            font-weight: 800;
            letter-spacing: 1px;
            color: #ffffff;
        }

        .receipt-header h2 {
            font-size: 0.9rem;
            font-weight: 400;
            color: #9ca3af;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .receipt-body {
            padding: 30px;
        }

        .info-group {
            margin-bottom: 22px;
        }

        .info-group-title {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--primary-color);
            font-weight: 700;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 8px 0;
            border-bottom: 1px dashed var(--border-color);
            font-size: 0.95rem;
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-label {
            color: var(--text-muted);
            font-weight: 400;
        }

        .info-value {
            font-weight: 600;
            color: var(--text-color);
            text-align: right;
        }

        .discount-banner {
            background-color: #ecfdf5;
            border: 1px solid #a7f3d0;
            color: #065f46;
            padding: 12px 16px;
            border-radius: 10px;
            font-size: 0.9rem;
            font-weight: 600;
            text-align: center;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .discount-banner.no-discount {
            background-color: #f8fafc;
            border-color: #e2e8f0;
            color: var(--text-muted);
        }

        .total-box {
            background-color: var(--accent-bg);
            border: 1px solid var(--border-color);
            border-radius: 14px;
            padding: 20px;
            text-align: center;
            margin-top: 20px;
        }

        .total-box p {
            font-size: 0.85rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-weight: 600;
        }

        .total-box h1 {
            font-size: 2.2rem;
            font-weight: 800;
            color: var(--primary-color);
            margin-top: 4px;
        }

        .welcome-message {
            background: linear-gradient(135deg, #fff5f7 0%, #ffe6eb 100%);
            border: 1px solid #fecdd3;
            border-radius: 12px;
            padding: 16px;
            text-align: center;
            margin-top: 20px;
        }

        .welcome-message h3 {
            color: var(--primary-color);
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 4px;
        }

        .welcome-message p {
            font-size: 0.9rem;
            color: var(--text-color);
        }

        .receipt-actions {
            display: flex;
            gap: 12px;
            margin-top: 25px;
        }

        .btn {
            flex: 1;
            padding: 14px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 0.9rem;
            border: none;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
            transition: all 0.2s ease;
        }

        .btn-primary {
            background-color: var(--primary-color);
            color: #ffffff;
            box-shadow: 0 4px 12px rgba(255, 0, 60, 0.2);
        }

        .btn-primary:hover {
            background-color: var(--primary-hover);
            transform: translateY(-2px);
        }

        .btn-secondary {
            background-color: #e2e8f0;
            color: var(--text-color);
        }

        .btn-secondary:hover {
            background-color: #cbd5e1;
        }

        @media print {
            body {
                background: white;
                padding: 0;
            }
            .receipt-card {
                box-shadow: none;
                border: none;
                max-width: 100%;
            }
            .receipt-actions {
                display: none;
            }
        }
    </style>
</head>

<body>

    <div class="receipt-card">

        <!-- ==========================================
             CABEÇALHO E LOGO
        =========================================== -->
        <div class="receipt-header">
            <div class="success-badge">
                <i class="fa-solid fa-circle-check"></i> Matrícula Confirmada
            </div>
            <div>
                <img src="logo.png" alt="Logo Iron Fit" onerror="this.style.display='none'">
            </div>
            <h1>IRON FIT</h1>
            <h2>Informações da Matrícula</h2>
        </div>

        <div class="receipt-body">

            <!-- ==========================================
                 DADOS DO ALUNO
            =========================================== -->
            <div class="info-group">
                <div class="info-group-title">
                    <i class="fa-solid fa-user"></i> Dados do Aluno
                </div>
                <div class="info-row">
                    <span class="info-label">Nome:</span>
                    <span class="info-value"><?= htmlspecialchars($nome) ?></span>
                </div>
                <div class="info-row">
                    <span class="info-label">Idade:</span>
                    <span class="info-value"><?= htmlspecialchars($idade) ?> anos</span>
                </div>
            </div>

            <!-- ==========================================
                 PLANO ESCOLHIDO
            =========================================== -->
            <div class="info-group">
                <div class="info-group-title">
                    <i class="fa-solid fa-dumbbell"></i> Plano Escolhido
                </div>
                <div class="info-row">
                    <span class="info-label">Plano da academia:</span>
                    <span class="info-value"><?= htmlspecialchars($nome_plano) ?></span>
                </div>
                <div class="info-row">
                    <span class="info-label">Valor mensal:</span>
                    <span class="info-value">R$ <?= $valor_plano_formatado ?></span>
                </div>
                <div class="info-row">
                    <span class="info-label">Quantidade de meses:</span>
                    <span class="info-value"><?= htmlspecialchars($meses) ?> <?= ($meses == 1) ? 'mês' : 'meses' ?></span>
                </div>
            </div>

            <!-- ==========================================
                 PLANO DE TREINO E PERSONAL
            =========================================== -->
            <div class="info-group">
                <div class="info-group-title">
                    <i class="fa-solid fa-bullseye"></i> Plano de Treino
                </div>
                <div class="info-row">
                    <span class="info-label">Treino escolhido:</span>
                    <span class="info-value"><?= htmlspecialchars($nome_treino) ?></span>
                </div>
                <div class="info-row">
                    <span class="info-label">Personal Trainer:</span>
                    <span class="info-value">
                        <?php if ($personal == "sim") { ?>
                            Sim (+ R$ 50 por mês)
                        <?php } else { ?>
                            Não
                        <?php } ?>
                    </span>
                </div>
            </div>

            <!-- ==========================================
                 DESCONTO
            =========================================== -->
            <div class="info-group">
                <div class="info-group-title">
                    <i class="fa-solid fa-tag"></i> Desconto
                </div>

                <?php if ($meses >= 12) { ?>
                    <div class="discount-banner">
                        <i class="fa-solid fa-gift"></i> 🎉 Você recebeu 15% de desconto!
                    </div>
                <?php } elseif ($meses >= 6) { ?>
                    <div class="discount-banner">
                        <i class="fa-solid fa-gift"></i> 🎉 Você recebeu 10% de desconto!
                    </div>
                <?php } else { ?>
                    <div class="discount-banner no-discount">
                        <i class="fa-solid fa-info-circle"></i> Você não recebeu desconto.
                    </div>
                <?php } ?>

                <div class="info-row">
                    <span class="info-label">Valor do desconto:</span>
                    <span class="info-value" style="color: var(--success-color);">
                        - R$ <?= $desconto_formatado ?>
                    </span>
                </div>
            </div>

            <!-- ==========================================
                 TOTAL
            =========================================== -->
            <div class="total-box">
                <p>Total da Matrícula</p>
                <h1>R$ <?= $total_formatado ?></h1>
            </div>

            <!-- ==========================================
                 MENSAGEM FINAL
            =========================================== -->
            <div class="welcome-message">
                <h3>🎉 Matrícula realizada!</h3>
                <p>Seja bem-vindo à <b>Iron Fit</b>!</p>
                <p style="margin-top: 4px; font-size: 0.85rem; color: var(--text-muted);">
                    Seu treino escolhido foi: <b><?= htmlspecialchars($nome_treino) ?></b>
                </p>
            </div>

            <!-- ==========================================
                 AÇÕES (IMPRIMIR / VOLTAR)
            =========================================== -->
            <div class="receipt-actions">
                <button onclick="window.print()" class="btn btn-secondary">
                    <i class="fa-solid fa-print"></i> Imprimir Recibo
                </button>
                <a href="index.html" class="btn btn-primary">
                    <i class="fa-solid fa-house"></i> Voltar ao Início
                </a>
            </div>

        </div>
    </div>

</body>

</html>