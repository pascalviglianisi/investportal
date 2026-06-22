<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>InvestPortal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #0f172a;
            color: #ffffff;
        }

        header {
            padding: 25px 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #020617;
            border-bottom: 1px solid #1e293b;
        }

        .logo {
            font-size: 26px;
            font-weight: bold;
            color: #38bdf8;
        }

        nav a {
            color: #e2e8f0;
            text-decoration: none;
            margin-left: 25px;
            font-weight: bold;
        }

        .hero {
            padding: 90px 60px;
            text-align: center;
        }

        .hero h1 {
            font-size: 52px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 20px;
            color: #cbd5e1;
            max-width: 800px;
            margin: 0 auto 35px auto;
            line-height: 1.6;
        }

        .button {
            display: inline-block;
            padding: 16px 30px;
            background: #38bdf8;
            color: #020617;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            margin: 8px;
        }

        .button.secondary {
            background: transparent;
            color: #38bdf8;
            border: 1px solid #38bdf8;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            padding: 40px 60px 80px 60px;
        }

        .card {
            background: #1e293b;
            padding: 30px;
            border-radius: 14px;
            border: 1px solid #334155;
        }

        .card h3 {
            color: #38bdf8;
            margin-top: 0;
        }

        .card p {
            color: #cbd5e1;
            line-height: 1.5;
        }

        footer {
            text-align: center;
            padding: 25px;
            background: #020617;
            color: #94a3b8;
            font-size: 14px;
        }

        @media (max-width: 800px) {
            header {
                padding: 20px;
                flex-direction: column;
                gap: 15px;
            }

            .hero {
                padding: 60px 20px;
            }

            .hero h1 {
                font-size: 36px;
            }

            .cards {
                grid-template-columns: 1fr;
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>

<header>
    <div class="logo">InvestPortal</div>
    <nav>
        <a href="#">Home</a>
        <a href="#">Mercati</a>
        <a href="#">Login</a>
    </nav>
</header>

<section class="hero">
    <h1>Il tuo portale per seguire investimenti e mercati</h1>
    <p>
        InvestPortal nasce per monitorare azioni, criptovalute, portafogli virtuali,
        andamento dei mercati e opportunità di investimento in modo semplice e ordinato.
    </p>

    <a href="#" class="button">Inizia ora</a>
    <a href="#" class="button secondary">Scopri di più</a>
</section>

<section class="cards">
    <div class="card">
        <h3>📈 Monitoraggio mercati</h3>
        <p>
            Segui l’andamento di azioni, crypto e asset finanziari con dati organizzati
            in una dashboard semplice.
        </p>
    </div>

    <div class="card">
        <h3>💼 Portafoglio virtuale</h3>
        <p>
            Crea simulazioni di investimento, controlla guadagni, perdite e rendimento
            complessivo.
        </p>
    </div>

    <div class="card">
        <h3>🔔 Alert e segnali</h3>
        <p>
            In futuro potrai ricevere avvisi su prezzi, variazioni importanti e possibili
            opportunità da analizzare.
        </p>
    </div>
</section>

<footer>
    InvestPortal &copy; {{ date('Y') }} - Contenuti informativi, non costituiscono consulenza finanziaria.
</footer>

</body>
</html>