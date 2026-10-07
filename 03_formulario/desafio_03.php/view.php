<!DOCTYPE html>
<html lang="pt-br">
<!--
  _______ _____ _______       _   _ _____ _    _ __  __ 
 |__   __|_   _|__   __|/\   | \ | |_   _| |  | |  \/  |
    | |    | |    | |  /  \  |  \| | | | | |  | | \  / |
    | |    | |    | | / /\ \ | . ` | | | | |  | | |\/| |
    | |   _| |_   | |/ ____ \| |\  |_| |_| |__| | |  | |
    |_|  |_____|  |_/_/    \_\_| \_|_|_____|\____/|_|  |_|
-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titanium Fitness - Matrícula</title>
    <!-- Fonte moderna do Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #ff003c;
            --primary-hover: #d60032;
            --bg-color: #0b0b0d;
            --card-bg: #16161a;
            --text-color: #ffffff;
            --text-muted: #a0a0a0;
            --input-bg: #222226;
            --border-color: #333338;
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
            padding: 20px;
            background-image: radial-gradient(circle at center, #1f1115 0%, #0b0b0d 70%);
        }

        .container {
            background-color: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            padding: 40px 30px;
            width: 100%;
            max-width: 450px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5), 0 0 20px rgba(255, 0, 60, 0.1);
            text-align: center;
        }

        .logo-area {
            margin-bottom: 20px;
        }

        .logo-area img {
            max-width: 120px;
            height: auto;
            filter: drop-shadow(0 0 8px rgba(255, 0, 60, 0.4));
        }

        h1 {
            font-size: 1.8rem;
            font-weight: 800;
            letter-spacing: 1px;
            margin-bottom: 5px;
            text-transform: uppercase;
            background: linear-gradient(45deg, #fff, var(--primary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        p.subtitle {
            font-size: 0.9rem;
            color: var(--text-muted);
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        label {
            display: block;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 8px;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 14px 16px;
            background-color: var(--input-bg);
            border: 1px solid var(--border-color);
            border-radius: 8px;
            color: var(--text-color);
            font-size: 0.95rem;
            transition: all 0.3s ease;
            outline: none;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 8px rgba(255, 0, 60, 0.4);
            background-color: #2a2a30;
        }

        select {
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23ff003c' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 16px center;
            background-size: 16px;
        }

        select option {
            background-color: var(--card-bg);
            color: var(--text-color);
        }

        .btn-submit {
            width: 100%;
            padding: 16px;
            background-color: var(--primary-color);
            color: #ffffff;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
            box-shadow: 0 4px 15px rgba(255, 0, 60, 0.3);
        }

        .btn-submit:hover {
            background-color: var(--primary-hover);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 0, 60, 0.5);
        }

        .btn-submit:active {
            transform: translateY(0);
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="logo-area">
            <img src="logo.png" alt="Logo Academia" onerror="this.style.display='none'">
        </div>

        <h1>Bem-Vindo!</h1>
        <p class="subtitle">Preencha os dados abaixo para realizar sua matrícula</p>

        <form action="logica.php" method="POST">

            <div class="form-group">
                <label for="nome">Nome Completo</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" required>
            </div>

            <div class="form-group">
                <label for="idade">Idade</label>
                <input type="number" id="idade" name="idade" placeholder="Digite sua idade" min="12" max="120" required>
            </div>

            <div class="form-group">
                <label for="plano">Escolha seu Plano</label>
                <select id="plano" name="plano" required>
                    <option value="basico">Plano Básico - R$ 80/mês</option>
                    <option value="premium">Plano Premium - R$ 120/mês</option>
                    <option value="vip">Plano VIP - R$ 180/mês</option>
                </select>
            </div>

            <div class="form-group">
                <label for="meses">Duração da Matrícula (Meses)</label>
                <input type="number" id="meses" name="meses" min="1" placeholder="Ex: 3, 6, 12" required>
            </div>

            <div class="form-group">
                <label for="personal">Acompanhamento de Personal Trainer?</label>
                <select id="personal" name="personal" required>
                    <option value="" disabled selected>Selecione uma opção</option>
                    <option value="nao">Não</option>
                    <option value="sim">Sim - R$ 50 adicionais por mês</option>
                </select>
            </div>

            <button type="submit" class="btn-submit">Confirmar Matrícula</button>

        </form>
    </div>

</body>
</html>