<!--
  _______ _____ _______       _   _ _____ _    _ __  __ 
 |__   __|_   _|__   __|/\   | \ | |_   _| |  | |  \/  |
    | |    | |    | |  /  \  |  \| | | | | |  | | \  / |
    | |    | |    | | / /\ \ | . ` | | | | |  | | |\/| |
    | |   _| |_   | |/ ____ \| |\  |_| |_| |__| | |  | |
    |_|  |_____|  |_/_/    \_\_| \_|_|_____|\____/|_|  |_|
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <!-- Configuração para garantir perfeita responsividade em dispositivos móveis -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TITANIUM FITNESS - Academia Premium & Matrícula Online</title>

    <!-- Conexão com Google Fonts para carregar fontes modernas (Montserrat e Poppins) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800;900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Carregamento do FontAwesome para ícones vetoriais modernos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* ==========================================================================
           1. VARIÁVEIS DE DESIGN (DESIGN TOKENS - TEMA CLARO MODERNO) & RESET
           ========================================================================== */
        :root {
            /* Cores Principais e Acentos */
            --primary-red: #ff003c;               /* Vermelho/Laranja Vibrante */
            --primary-red-hover: #e00034;
            --primary-red-glow: rgba(255, 0, 60, 0.18);
            --secondary-gold: #ff9f1c;            /* Laranja/Dourado de Destaque */

            /* Cores de Fundo do Tema Claro */
            --bg-light: #f4f6f9;                  /* Fundo Principal Cinza Suave */
            --bg-white: #ffffff;                  /* Fundo Branco Puro para Cards */
            --bg-card-hover: #fcfdfe;             /* Estado Hover nos Cards */
            --bg-input: #ffffff;                  /* Fundo dos Campos do Formulário */
            --bg-summary: #1e222d;                /* Card Escuro de Destaque para o Resumo */

            /* Bordas e Sombras */
            --border-color: #e2e8f0;              /* Borda de Separação Clara */
            --border-focus: #ff003c;
            --shadow-sm: 0 4px 12px rgba(0, 0, 0, 0.03);
            --shadow-md: 0 10px 30px rgba(15, 23, 42, 0.08);
            --shadow-lg: 0 20px 40px rgba(15, 23, 42, 0.12);

            /* Tipografia e Cores de Texto */
            --text-dark: #1e293b;                 /* Texto Escuro de Leitura Principal */
            --text-muted: #64748b;                /* Texto Secundário/Desbotado */
            --text-light: #ffffff;                /* Texto Claro para Elementos Escuros */
            --font-heading: 'Montserrat', sans-serif;
            --font-body: 'Poppins', sans-serif;
        }

        /* Reset global para remover margens padrão e habilitar caixa correta */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            background-color: var(--bg-light);
            color: var(--text-dark);
            font-family: var(--font-body);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* ==========================================================================
           2. CABEÇALHO E MENU DE NAVEGAÇÃO (GLASSMORPHISM CLARO)
           ========================================================================== */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.9);  /* Fundo branco translúcido */
            backdrop-filter: blur(12px);            /* Efeito Glassmorphism de desfoque */
            border-bottom: 1px solid var(--border-color);
            transition: all 0.3s ease;
        }

        header.scrolled {
            box-shadow: var(--shadow-md);
            background: rgba(255, 255, 255, 0.98);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
        }

        /* Logotipo com gradiente */
        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
        }

        .logo-icon {
            width: 42px;
            height: 42px;
            background: linear-gradient(135deg, var(--primary-red), #d60032);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 1.3rem;
            box-shadow: 0 4px 12px var(--primary-red-glow);
        }

        .logo-text {
            font-family: var(--font-heading);
            font-weight: 900;
            font-size: 1.4rem;
            letter-spacing: 0.5px;
            color: var(--text-dark);
        }

        .logo-text span {
            color: var(--primary-red);
        }

        /* Menu Principal */
        .nav-menu {
            display: flex;
            gap: 25px;
            list-style: none;
            align-items: center;
        }

        .nav-link {
            color: var(--text-muted);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
            transition: color 0.3s ease;
            position: relative;
        }

        .nav-link:hover, .nav-link.active {
            color: var(--primary-red);
        }

        /* Linha indicadora abaixo das opções do menu */
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary-red);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after, .nav-link.active::after {
            width: 100%;
        }

        /* Botão de Destaque no Menu */
        .btn-nav-cta {
            background: linear-gradient(45deg, var(--primary-red), #ff2a55);
            color: #fff;
            padding: 10px 22px;
            border-radius: 30px;
            font-weight: 700;
            font-size: 0.9rem;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 15px var(--primary-red-glow);
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .btn-nav-cta:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 0, 60, 0.35);
        }

        .menu-toggle {
            display: none;
            font-size: 1.5rem;
            color: var(--text-dark);
            cursor: pointer;
        }

        /* ==========================================================================
           3. SEÇÃO HERO (DESTAQUE PRINCIPAL TEMA CLARO)
           ========================================================================== */
        .hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 130px 20px 70px;
            background: radial-gradient(circle at 85% 15%, rgba(255, 0, 60, 0.08) 0%, transparent 45%),
                        radial-gradient(circle at 15% 85%, rgba(255, 159, 28, 0.1) 0%, transparent 45%),
                        var(--bg-light);
            overflow: hidden;
        }

        .hero-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(255, 0, 60, 0.08);
            border: 1px solid rgba(255, 0, 60, 0.2);
            color: var(--primary-red);
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 20px;
        }

        .hero-title {
            font-family: var(--font-heading);
            font-size: 3.4rem;
            font-weight: 900;
            line-height: 1.15;
            margin-bottom: 20px;
            text-transform: uppercase;
            color: var(--text-dark);
        }

        .hero-title span {
            background: linear-gradient(45deg, var(--primary-red), var(--secondary-gold));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-description {
            font-size: 1.08rem;
            color: var(--text-muted);
            margin-bottom: 35px;
            max-width: 520px;
        }

        .hero-buttons {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .btn-primary {
            background: linear-gradient(45deg, var(--primary-red), var(--primary-red-hover));
            color: #fff;
            padding: 16px 36px;
            border-radius: 10px;
            font-weight: 800;
            font-size: 1rem;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            box-shadow: 0 6px 20px var(--primary-red-glow);
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(255, 0, 60, 0.35);
        }

        .btn-outline {
            background: var(--bg-white);
            color: var(--text-dark);
            padding: 16px 30px;
            border-radius: 10px;
            font-weight: 700;
            font-size: 1rem;
            text-decoration: none;
            border: 2px solid var(--border-color);
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            box-shadow: var(--shadow-sm);
        }

        .btn-outline:hover {
            border-color: var(--primary-red);
            color: var(--primary-red);
            transform: translateY(-2px);
        }

        /* Estatísticas */
        .hero-stats {
            display: flex;
            gap: 35px;
            margin-top: 40px;
            padding-top: 30px;
            border-top: 1px solid var(--border-color);
        }

        .stat-item h3 {
            font-family: var(--font-heading);
            font-size: 2.2rem;
            font-weight: 900;
            color: var(--text-dark);
        }

        .stat-item h3 span {
            color: var(--primary-red);
        }

        .stat-item p {
            font-size: 0.82rem;
            color: var(--text-muted);
            text-transform: uppercase;
            font-weight: 700;
        }

        /* Card da Imagem Principal */
        .hero-image-card {
            position: relative;
            border-radius: 24px;
            overflow: hidden;
            border: 1px solid var(--border-color);
            box-shadow: var(--shadow-lg);
            background: var(--bg-white);
        }

        .hero-image-card img {
            width: 100%;
            height: auto;
            display: block;
            transform: scale(1.01);
            transition: transform 0.5s ease;
        }

        .hero-image-card:hover img {
            transform: scale(1.05);
        }

        .hero-card-badge {
            position: absolute;
            bottom: 20px;
            left: 20px;
            right: 20px;
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(12px);
            padding: 16px 22px;
            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.8);
            display: flex;
            align-items: center;
            gap: 15px;
            box-shadow: var(--shadow-md);
        }

        .badge-icon {
            width: 45px;
            height: 45px;
            background: linear-gradient(135deg, var(--secondary-gold), #e08800);
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }

        /* ==========================================================================
           4. SEÇÃO DE BENEFÍCIOS / DIFERENCIAIS
           ========================================================================== */
        .section-title-area {
            text-align: center;
            max-width: 650px;
            margin: 0 auto 50px;
        }

        .subtitle-tag {
            color: var(--primary-red);
            font-weight: 800;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            display: block;
            margin-bottom: 8px;
        }

        .section-title {
            font-family: var(--font-heading);
            font-size: 2.2rem;
            font-weight: 900;
            text-transform: uppercase;
            line-height: 1.2;
            color: var(--text-dark);
        }

        .benefits {
            padding: 90px 20px;
            background: var(--bg-white);
        }

        .benefits-grid {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 25px;
        }

        .benefit-card {
            background: var(--bg-light);
            border: 1px solid var(--border-color);
            border-radius: 18px;
            padding: 35px 25px;
            transition: all 0.3s ease;
            position: relative;
            top: 0;
        }

        .benefit-card:hover {
            top: -8px;
            background: var(--bg-white);
            border-color: var(--primary-red);
            box-shadow: var(--shadow-md);
        }

        .benefit-icon {
            width: 60px;
            height: 60px;
            background: rgba(255, 0, 60, 0.08);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: var(--primary-red);
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        .benefit-card:hover .benefit-icon {
            background: var(--primary-red);
            color: #fff;
            box-shadow: 0 4px 15px var(--primary-red-glow);
        }

        .benefit-card h3 {
            font-family: var(--font-heading);
            font-size: 1.2rem;
            margin-bottom: 12px;
            font-weight: 800;
            color: var(--text-dark);
        }

        .benefit-card p {
            color: var(--text-muted);
            font-size: 0.9rem;
        }

        /* ==========================================================================
           5. SEÇÃO DE PLANOS INTERATIVOS
           ========================================================================== */
        .plans {
            padding: 90px 20px;
            background: var(--bg-light);
        }

        .plans-grid {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            align-items: stretch;
        }

        .plan-card {
            background: var(--bg-white);
            border: 1px solid var(--border-color);
            border-radius: 20px;
            padding: 40px 30px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            transition: all 0.3s ease;
            box-shadow: var(--shadow-sm);
        }

        .plan-card:hover {
            border-color: var(--primary-red);
            transform: translateY(-5px);
            box-shadow: var(--shadow-md);
        }

        /* Card em destaque (Plano Mais Popular) */
        .plan-card.popular {
            border: 2px solid var(--primary-red);
            box-shadow: var(--shadow-md);
        }

        .popular-tag {
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%);
            background: var(--primary-red);
            color: #fff;
            padding: 4px 18px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 4px 10px var(--primary-red-glow);
        }

        .plan-header h3 {
            font-family: var(--font-heading);
            font-size: 1.5rem;
            font-weight: 800;
            margin-bottom: 10px;
            color: var(--text-dark);
        }

        .plan-price {
            font-family: var(--font-heading);
            font-size: 2.8rem;
            font-weight: 900;
            color: var(--text-dark);
            margin-bottom: 20px;
        }

        .plan-price span {
            font-size: 1rem;
            font-weight: 500;
            color: var(--text-muted);
        }

        .plan-features {
            list-style: none;
            margin-bottom: 30px;
        }

        .plan-features li {
            font-size: 0.92rem;
            color: var(--text-muted);
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .plan-features li i {
            color: var(--primary-red);
        }

        .btn-select-plan {
            width: 100%;
            padding: 14px;
            border-radius: 10px;
            border: 2px solid var(--primary-red);
            background: transparent;
            color: var(--primary-red);
            font-weight: 800;
            text-transform: uppercase;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-select-plan:hover, .plan-card.popular .btn-select-plan {
            background: var(--primary-red);
            color: #fff;
            box-shadow: 0 4px 15px var(--primary-red-glow);
        }

        /* ==========================================================================
           6. FORMULÁRIO DE MATRÍCULA E SIMULADOR EM TEMPO REAL
           ========================================================================== */
        .enrollment {
            padding: 90px 20px;
            background: var(--bg-white);
        }

        .enrollment-container {
            max-width: 1080px;
            margin: 0 auto;
            background: var(--bg-white);
            border: 1px solid var(--border-color);
            border-radius: 24px;
            overflow: hidden;
            box-shadow: var(--shadow-lg);
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
        }

        .form-side {
            padding: 45px 35px;
            background: var(--bg-white);
        }

        .form-header {
            margin-bottom: 30px;
        }

        .form-header h2 {
            font-family: var(--font-heading);
            font-size: 1.8rem;
            font-weight: 800;
            text-transform: uppercase;
            color: var(--text-dark);
        }

        .form-header p {
            font-size: 0.88rem;
            color: var(--text-muted);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
            color: var(--text-dark);
            margin-bottom: 8px;
            letter-spacing: 0.5px;
        }

        .form-control {
            width: 100%;
            padding: 14px 16px;
            background-color: var(--bg-light);
            border: 1px solid var(--border-color);
            border-radius: 10px;
            color: var(--text-dark);
            font-size: 0.95rem;
            outline: none;
            transition: all 0.3s ease;
            font-family: var(--font-body);
        }

        .form-control:focus {
            border-color: var(--primary-red);
            background-color: var(--bg-white);
            box-shadow: 0 0 0 3px var(--primary-red-glow);
        }

        /* Customização da seta do select HTML */
        select.form-control {
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23ff003c' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 16px center;
            background-size: 16px;
        }

        .btn-submit-main {
            width: 100%;
            padding: 16px;
            background: linear-gradient(45deg, var(--primary-red), var(--primary-red-hover));
            color: #fff;
            border: none;
            border-radius: 10px;
            font-size: 1rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            cursor: pointer;
            box-shadow: 0 4px 20px var(--primary-red-glow);
            transition: all 0.3s ease;
            margin-top: 10px;
        }

        .btn-submit-main:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 0, 60, 0.4);
        }

        /* Painel Lateral de Resumo */
        .summary-side {
            background: var(--bg-summary);
            color: #fff;
            padding: 45px 35px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .summary-title {
            font-family: var(--font-heading);
            font-size: 1.25rem;
            font-weight: 800;
            text-transform: uppercase;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 10px;
            color: #fff;
        }

        .summary-title i {
            color: var(--secondary-gold);
        }

        .summary-list {
            list-style: none;
            margin-bottom: 30px;
        }

        .summary-item {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px dashed rgba(255, 255, 255, 0.15);
            font-size: 0.9rem;
            color: #94a3b8;
        }

        .summary-item span:last-child {
            color: #fff;
            font-weight: 600;
        }

        .summary-total {
            background: rgba(255, 0, 60, 0.15);
            border: 1px solid rgba(255, 0, 60, 0.3);
            border-radius: 14px;
            padding: 22px;
            margin-top: auto;
        }

        .total-label {
            font-size: 0.85rem;
            color: #cbd5e1;
            text-transform: uppercase;
            font-weight: 700;
        }

        .total-price {
            font-family: var(--font-heading);
            font-size: 2.2rem;
            font-weight: 900;
            color: var(--primary-red);
        }

        .total-note {
            font-size: 0.75rem;
            color: #94a3b8;
            margin-top: 5px;
        }

        /* ==========================================================================
           7. RODAPÉ (FOOTER)
           ========================================================================== */
        footer {
            background: #0f172a;
            color: #fff;
            padding: 70px 20px 20px;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1.5fr;
            gap: 40px;
            margin-bottom: 50px;
        }

        .footer-col p {
            color: #94a3b8;
            font-size: 0.9rem;
            margin-top: 15px;
            max-width: 300px;
        }

        .footer-col h4 {
            font-family: var(--font-heading);
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: #fff;
            text-transform: uppercase;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: #94a3b8;
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: var(--primary-red);
        }

        .footer-info {
            list-style: none;
        }

        .footer-info li {
            color: #94a3b8;
            font-size: 0.9rem;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .footer-info i {
            color: var(--primary-red);
        }

        .social-links {
            display: flex;
            gap: 12px;
            margin-top: 20px;
        }

        .social-btn {
            width: 38px;
            height: 38px;
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-btn:hover {
            background: var(--primary-red);
            border-color: var(--primary-red);
            transform: translateY(-3px);
            box-shadow: 0 4px 10px var(--primary-red-glow);
        }

        .footer-bottom {
            max-width: 1200px;
            margin: 0 auto;
            padding-top: 25px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            text-align: center;
            font-size: 0.85rem;
            color: #64748b;
        }

        /* ==========================================================================
           8. REGRAS DE RESPONSIVIDADE (MOBILE & TABLETS)
           ========================================================================== */
        @media (max-width: 992px) {
            .hero-container {
                grid-template-columns: 1fr;
                text-align: center;
            }
            .hero-description {
                margin: 0 auto 35px;
            }
            .hero-buttons {
                justify-content: center;
            }
            .hero-stats {
                justify-content: center;
            }
            .enrollment-container {
                grid-template-columns: 1fr;
            }
            .summary-side {
                border-top: 1px solid var(--border-color);
            }
            .footer-container {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 768px) {
            .nav-menu {
                position: fixed;
                top: 70px;
                left: -100%;
                width: 100%;
                height: calc(100vh - 70px);
                background: var(--bg-white);
                flex-direction: column;
                justify-content: center;
                transition: left 0.4s ease;
                box-shadow: var(--shadow-md);
            }
            .nav-menu.active {
                left: 0;
            }
            .menu-toggle {
                display: block;
            }
            .hero-title {
                font-size: 2.5rem;
            }
            .footer-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

    <!-- NAV BAR - CABEÇALHO DA PÁGINA -->
    <header id="header">
        <div class="nav-container">
            <!-- Logotipo da Academia -->
            <a href="#" class="logo">
                <div class="logo-icon">
                    <i class="fa-solid fa-dumbbell"></i>
                </div>
                <div class="logo-text">TITANIUM <span>FITNESS</span></div>
            </a>

            <!-- Links de navegação para ancoragem suave -->
            <ul class="nav-menu" id="nav-menu">
                <li><a href="#inicio" class="nav-link active">Início</a></li>
                <li><a href="#beneficios" class="nav-link">Diferenciais</a></li>
                <li><a href="#planos" class="nav-link">Planos</a></li>
                <li><a href="#matricula" class="nav-link">Matrícula</a></li>
                <li><a href="#contato" class="nav-link">Contato</a></li>
            </ul>

            <div style="display: flex; align-items: center; gap: 15px;">
                <!-- Botão CTA Direto para o Formulário -->
                <a href="#matricula" class="btn-nav-cta">Matricule-se</a>
                
                <!-- Ícone Hambúrguer para telas mobile -->
                <div class="menu-toggle" id="menu-toggle">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
        </div>
    </header>

    <!-- SEÇÃO HERO / APRESENTAÇÃO PRINCIPAL -->
    <section class="hero" id="inicio">
        <div class="hero-container">
            <div class="hero-content">
                <div class="hero-badge">
                    <i class="fa-solid fa-fire"></i> Academia Premium 24 Horas
                </div>
                <h1 class="hero-title">Supere Seus <span>Limites</span> Todos Os Dias</h1>
                <p class="hero-description">
                    Equipamentos de última geração, ambiente climatizado, instrutores certificados e o plano perfeito para você conquistar o corpo e a saúde que sempre desejou.
                </p>
                <div class="hero-buttons">
                    <a href="#matricula" class="btn-primary">
                        Comece Agora <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="#planos" class="btn-outline">
                        Ver Planos
                    </a>
                </div>

                <!-- Estatísticas e métricas de impacto -->
                <div class="hero-stats">
                    <div class="stat-item">
                        <h3>+<span>2500</span></h3>
                        <p>Alunos Ativos</p>
                    </div>
                    <div class="stat-item">
                        <h3>100<span>%</span></h3>
                        <p>Equip. Importados</p>
                    </div>
                    <div class="stat-item">
                        <h3>24<span>/7</span></h3>
                        <p>Acesso Livre</p>
                    </div>
                </div>
            </div>

            <!-- Imagem e Card de Garantia de Qualidade -->
            <div class="hero-image-card">
                <img src="https://images.unsplash.com/photo-1517838277536-f5f99be501cd?q=80&w=800&auto=format&fit=crop" alt="Treino Titanium Fitness" onerror="this.src='https://placehold.co/800x600/f4f6f9/1e293b?text=Titanium+Fitness'">
                <div class="hero-card-badge">
                    <div class="badge-icon">
                        <i class="fa-solid fa-trophy"></i>
                    </div>
                    <div>
                        <h4 style="font-size: 0.95rem; font-weight: 700; color: var(--text-dark);">Alta Performance</h4>
                        <p style="font-size: 0.8rem; color: var(--text-muted);">Resultados garantidos com acompanhamento contínuo</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SEÇÃO DE BENEFÍCIOS / DIFERENCIAIS -->
    <section class="benefits" id="beneficios">
        <div class="section-title-area">
            <span class="subtitle-tag">Por Que A Titanium?</span>
            <h2 class="section-title">A Estrutura Que Você Merece</h2>
        </div>

        <div class="benefits-grid">
            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fa-solid fa-dumbbell"></i>
                </div>
                <h3>Maquinário de Ponta</h3>
                <p>Aparelhos biomecanicamente projetados para maximizar seus ganhos com total segurança articular.</p>
            </div>

            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fa-solid fa-clock"></i>
                </div>
                <h3>Acesso 24 Horas</h3>
                <p>Treine na hora que quiser. Nossa unidade está aberta dia e noite para se adaptar perfeitamente à sua rotina.</p>
            </div>

            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fa-solid fa-user-ninja"></i>
                </div>
                <h3>Personal Trainers</h3>
                <p>Profissionais amplamente qualificados para elaborar treinos focados na sua meta individual.</p>
            </div>

            <div class="benefit-card">
                <div class="benefit-icon">
                    <i class="fa-solid fa-utensils"></i>
                </div>
                <h3>Consultoria Nutricional</h3>
                <p>Orientação alimentar personalizada para acelerar a queima de gordura e ganho de massa magra.</p>
            </div>
        </div>
    </section>

    <!-- SEÇÃO DE PLANOS INTERATIVOS -->
    <section class="plans" id="planos">
        <div class="section-title-area">
            <span class="subtitle-tag">Escolha Seu Plano</span>
            <h2 class="section-title">Invista No Seu Bem-Estar</h2>
        </div>

        <div class="plans-grid">
            <!-- Card Plano Básico -->
            <div class="plan-card">
                <div class="plan-header">
                    <h3>Plano Básico</h3>
                    <div class="plan-price">R$ 80 <span>/mês</span></div>
                </div>
                <ul class="plan-features">
                    <li><i class="fa-solid fa-check"></i> Acesso à musculação e aeróbico</li>
                    <li><i class="fa-solid fa-check"></i> Horário livre em dias úteis</li>
                    <li><i class="fa-solid fa-check"></i> Armários individuais</li>
                    <li style="opacity: 0.35;"><i class="fa-solid fa-xmark" style="color: #94a3b8;"></i> Acesso a outras unidades</li>
                    <li style="opacity: 0.35;"><i class="fa-solid fa-xmark" style="color: #94a3b8;"></i> Cadeira de massagem</li>
                </ul>
                <button class="btn-select-plan" onclick="selectPlan('basico')">Selecionar Este Plano</button>
            </div>

            <!-- Card Plano Premium (Destaque Principal) -->
            <div class="plan-card popular">
                <div class="popular-tag">Mais Popular</div>
                <div class="plan-header">
                    <h3>Plano Premium</h3>
                    <div class="plan-price">R$ 120 <span>/mês</span></div>
                </div>
                <ul class="plan-features">
                    <li><i class="fa-solid fa-check"></i> Acesso ilimitado 24/7</li>
                    <li><i class="fa-solid fa-check"></i> Musculação, Cardio e Aulas em Grupo</li>
                    <li><i class="fa-solid fa-check"></i> Leve 1 amigo por mês</li>
                    <li><i class="fa-solid fa-check"></i> Avaliação física trimestral</li>
                    <li style="opacity: 0.35;"><i class="fa-solid fa-xmark" style="color: #94a3b8;"></i> Cadeira de massagem</li>
                </ul>
                <button class="btn-select-plan" onclick="selectPlan('premium')">Selecionar Este Plano</button>
            </div>

            <!-- Card Plano VIP -->
            <div class="plan-card">
                <div class="plan-header">
                    <h3>Plano VIP</h3>
                    <div class="plan-price">R$ 180 <span>/mês</span></div>
                </div>
                <ul class="plan-features">
                    <li><i class="fa-solid fa-check"></i> Acesso Total 24h a todas as unidades</li>
                    <li><i class="fa-solid fa-check"></i> Leve acompanhante sempre</li>
                    <li><i class="fa-solid fa-check"></i> Cadeiras de Massagem VIP</li>
                    <li><i class="fa-solid fa-check"></i> Avaliação física + Nutricionista</li>
                    <li><i class="fa-solid fa-check"></i> Toalha e kit de banho inclusos</li>
                </ul>
                <button class="btn-select-plan" onclick="selectPlan('vip')">Selecionar Este Plano</button>
            </div>
        </div>
    </section>

    <!-- SEÇÃO DE MATRÍCULA E SIMULADOR DE MENSALIDADE -->
    <section class="enrollment" id="matricula">
        <div class="section-title-area">
            <span class="subtitle-tag">Matrícula Simplificada</span>
            <h2 class="section-title">Faça Sua Inscrição Agora</h2>
        </div>

        <div class="enrollment-container">
            <!-- LADO ESQUERDO: FORMULÁRIO DE ENVIO COMPATÍVEL COM PHP -->
            <div class="form-side">
                <div class="form-header">
                    <h2>Dados do Aluno</h2>
                    <p>Preencha as informações para calcular seu plano e confirmar.</p>
                </div>

                <!-- 
                   OBSERVAÇÃO COMPATIBILIDADE PHP:
                   O formulário envia os campos exatos via método POST para 'logica.php'
                -->
                <form id="enrollmentForm" action="logica.php" method="POST">

                    <!-- Campo Nome -->
                    <div class="form-group">
                        <label for="nome">Nome Completo</label>
                        <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite seu nome completo" required>
                    </div>

                    <!-- Campo Idade -->
                    <div class="form-group">
                        <label for="idade">Idade</label>
                        <input type="number" id="idade" name="idade" class="form-control" placeholder="Digite sua idade" min="12" max="120" required>
                    </div>

                    <!-- Campo Seleção de Plano -->
                    <div class="form-group">
                        <label for="plano">Escolha seu plano</label>
                        <select id="plano" name="plano" class="form-control" required>
                            <option value="basico">Plano Básico - R$ 80 / mês</option>
                            <option value="premium" selected>Plano Premium - R$ 120 / mês</option>
                            <option value="vip">Plano VIP - R$ 180 / mês</option>
                        </select>
                    </div>

                    <!-- Campo Duração (Meses) -->
                    <div class="form-group">
                        <label for="meses">Quantidade de meses</label>
                        <input type="number" id="meses" name="meses" class="form-control" min="1" value="1" placeholder="Quantidade meses" required>
                    </div>

                    <!-- Campo Personal Trainer -->
                    <div class="form-group">
                        <label for="personal">Personal Trainer</label>
                        <select id="personal" name="personal" class="form-control" required>
                            <option value="nao" selected>Não</option>
                            <option value="sim">Sim - R$ 50 por mês</option>
                        </select>
                    </div>

                    <!-- Botão de Envio do Formulário PHP -->
                    <button type="submit" class="btn-submit-main">
                        <i class="fa-solid fa-lock"></i> Confirmar Matrícula
                    </button>
                </form>
            </div>

            <!-- LADO DIREITO: RESUMO EM TEMPO REAL VIA JAVASCRIPT -->
            <div class="summary-side">
                <div>
                    <div class="summary-title">
                        <i class="fa-solid fa-calculator"></i> Resumo do Investimento
                    </div>
                    <ul class="summary-list">
                        <li class="summary-item">
                            <span>Plano Selecionado:</span>
                            <span id="summary-plan-name">Plano Premium</span>
                        </li>
                        <li class="summary-item">
                            <span>Valor Mensal do Plano:</span>
                            <span id="summary-plan-price">R$ 120,00</span>
                        </li>
                        <li class="summary-item">
                            <span>Duração Contratada:</span>
                            <span id="summary-months">1 mês(es)</span>
                        </li>
                        <li class="summary-item">
                            <span>Personal Trainer:</span>
                            <span id="summary-personal">Não (R$ 0,00)</span>
                        </li>
                        <li class="summary-item">
                            <span>Mensalidade Recorrente:</span>
                            <span id="summary-monthly-total">R$ 120,00/mês</span>
                        </li>
                    </ul>
                </div>

                <!-- Quadro com Valor Total Final do Contrato -->
                <div class="summary-total">
                    <div class="total-label">Investimento Total do Período</div>
                    <div class="total-price" id="summary-grand-total">R$ 120,00</div>
                    <div class="total-note">* Isento de taxa de matrícula e sem fidelidade escondida.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- RODAPÉ DA PÁGINA (FOOTER) -->
    <footer id="contato">
        <div class="footer-container">
            <!-- Coluna 1: Informações Gerais e Redes Sociais -->
            <div class="footer-col">
                <a href="#" class="logo">
                    <div class="logo-icon"><i class="fa-solid fa-dumbbell"></i></div>
                    <div class="logo-text" style="color: #fff;">TITANIUM <span>FITNESS</span></div>
                </a>
                <p>A melhor experiência em condicionamento físico, saúde e bem-estar. Transforme seu estilo de vida com a Titanium Fitness.</p>
                <div class="social-links">
                    <a href="#" class="social-btn" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="social-btn" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="social-btn" title="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="#" class="social-btn" title="YouTube"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>

            <!-- Coluna 2: Links Rápidos -->
            <div class="footer-col">
                <h4>Navegação</h4>
                <ul class="footer-links">
                    <li><a href="#inicio">Início</a></li>
                    <li><a href="#beneficios">Diferenciais</a></li>
                    <li><a href="#planos">Planos</a></li>
                    <li><a href="#matricula">Matrícula</a></li>
                </ul>
            </div>

            <!-- Coluna 3: Horários de Funcionamento -->
            <div class="footer-col">
                <h4>Horários</h4>
                <ul class="footer-info">
                    <li><i class="fa-regular fa-clock"></i> Seg - Sex: 24 Horas</li>
                    <li><i class="fa-regular fa-clock"></i> Sábados: 06h às 22h</li>
                    <li><i class="fa-regular fa-clock"></i> Domingos: 08h às 18h</li>
                </ul>
            </div>

            <!-- Coluna 4: Contato e Localização -->
            <div class="footer-col">
                <h4>Contato</h4>
                <ul class="footer-info">
                    <li><i class="fa-solid fa-location-dot"></i> Av. Paulista, 1000 - São Paulo/SP</li>
                    <li><i class="fa-solid fa-phone"></i> (11) 99999-8888</li>
                    <li><i class="fa-solid fa-envelope"></i> contato@titaniumfitness.com.br</li>
                </ul>
            </div>
        </div>

        <!-- Copyright e Créditos -->
        <div class="footer-bottom">
            <p>&copy; 2026 TITANIUM FITNESS. Todos os direitos reservados. Projeto totalmente comentado e integrado em Tema Claro.</p>
        </div>
    </footer>

    <!-- LÓGICA JAVASCRIPT: SIMULADOR EM TEMPO REAL E INTERAÇÕES -->
    <script>
        /* ==========================================================================
           1. MAPEAMENTO DE DADOS DOS PLANOS
           ========================================================================== */
        // Objeto contendo os nomes e valores mensais de cada plano
        const planPrices = {
            'basico': { name: 'Plano Básico', price: 80 },
            'premium': { name: 'Plano Premium', price: 120 },
            'vip': { name: 'Plano VIP', price: 180 }
        };

        // Taxa adicional fixa do Personal Trainer
        const PERSONAL_FEE = 50;

        /* ==========================================================================
           2. CAPTURA DE ELEMENTOS DO DOM (FORMULÁRIO E PAINEL)
           ========================================================================== */
        // Campos de entrada do formulário PHP
        const planoSelect = document.getElementById('plano');
        const mesesInput = document.getElementById('meses');
        const personalSelect = document.getElementById('personal');

        // Elementos de exibição do painel de resumo
        const summaryPlanName = document.getElementById('summary-plan-name');
        const summaryPlanPrice = document.getElementById('summary-plan-price');
        const summaryMonths = document.getElementById('summary-months');
        const summaryPersonal = document.getElementById('summary-personal');
        const summaryMonthlyTotal = document.getElementById('summary-monthly-total');
        const summaryGrandTotal = document.getElementById('summary-grand-total');

        /* ==========================================================================
           3. FUNÇÃO PRINCIPAL DE CÁLCULO E ATUALIZAÇÃO DO SIMULADOR
           ========================================================================== */
        function updateCalculator() {
            // Obter a opção do plano atualmente selecionada
            const selectedPlanKey = planoSelect.value || 'basico';
            const planData = planPrices[selectedPlanKey] || planPrices['basico'];

            // Obter e validar a quantidade de meses inserida
            let months = parseInt(mesesInput.value) || 1;
            if (months < 1) months = 1;

            // Verificar se o usuário contratou o serviço de Personal Trainer
            const hasPersonal = personalSelect.value === 'sim';
            const personalCost = hasPersonal ? PERSONAL_FEE : 0;

            // Cálculos financeiros
            const monthlyTotal = planData.price + personalCost; // Total por mês
            const grandTotal = monthlyTotal * months;          // Total acumulado no contrato

            // Atualização dinâmica dos textos e valores formatados em moeda brasileira (R$)
            summaryPlanName.textContent = planData.name;
            summaryPlanPrice.textContent = `R$ ${planData.price.toFixed(2).replace('.', ',')}`;
            summaryMonths.textContent = `${months} mês(es)`;
            summaryPersonal.textContent = hasPersonal 
                ? `Sim (+R$ ${PERSONAL_FEE.toFixed(2).replace('.', ',')}/mês)` 
                : 'Não (R$ 0,00)';

            summaryMonthlyTotal.textContent = `R$ ${monthlyTotal.toFixed(2).replace('.', ',')}/mês`;
            summaryGrandTotal.textContent = `R$ ${grandTotal.toFixed(2).replace('.', ',')}`;
        }

        /* ==========================================================================
           4. SELEÇÃO DE PLANO A PARTIR DOS CARDS DE PREÇO
           ========================================================================== */
        function selectPlan(planKey) {
            if (planoSelect) {
                // Seleciona automaticamente o plano no formulário
                planoSelect.value = planKey;
                // Recalcula o resumo visual imediatamente
                updateCalculator();
                
                // Realiza rolagem suave diretamente para o formulário de matrícula
                document.getElementById('matricula').scrollIntoView({ behavior: 'smooth' });
            }
        }

        /* ==========================================================================
           5. EVENT LISTENERS E INICIALIZAÇÃO
           ========================================================================== */
        // Registrar ouvintes de evento para recálculo instantâneo a cada alteração
        planoSelect.addEventListener('change', updateCalculator);
        mesesInput.addEventListener('input', updateCalculator);
        personalSelect.addEventListener('change', updateCalculator);

        // Alterar o visual do cabeçalho ao rolar a página
        window.addEventListener('scroll', () => {
            const header = document.getElementById('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Alternar a visibilidade do menu em telas móveis (Menu Hambúrguer)
        const menuToggle = document.getElementById('menu-toggle');
        const navMenu = document.getElementById('nav-menu');

        menuToggle.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });

        // Executar o cálculo assim que a página carregar
        window.addEventListener('DOMContentLoaded', updateCalculator);
    </script>
</body>
</html>