<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modalidades Oferecidas - Instituto Federal</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f2f5;
            color: #333;
        }

        a {
            text-decoration: none;
            color: inherit;
        }


        .header {
            background-color: #00843D; /* Verde do Instituto Federal */
            color: white;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-weight: 700;
            font-size: 1.2rem;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 1.5rem;
        }

        .nav-links a {
            padding: 0.5rem;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: #ddd;
        }

        .login-btn {
            border: 1px solid white;
            padding: 0.5rem 1rem;
            border-radius: 5px;
        }


        .main-content {
            padding: 3rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .main-title {
            text-align: center;
            color: #00843D;
            font-size: 2.5rem;
            margin-bottom: 2.5rem;
            font-weight: 700;
        }

        .cards-container {
            display: flex;
            justify-content: center;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 320px;
            display: flex;
            flex-direction: column;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        }

        .card-image {
            background-color: #00843D;
            color: white;
            font-size: 2.5rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 180px;
        }

        .card-content {
            padding: 1.5rem;
        }

        .card-content h3 {
            font-size: 1.25rem;
            margin-bottom: 0.75rem;
            color: #333;
        }

        .card-content p {
            font-size: 1rem;
            line-height: 1.6;
            color: #555;
        }
    </style>
</head>
<body>

    <header class="header">
        <div class="logo">
            INSTITUTO FEDERAL<br>Ceará
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="#">Início</a></li>
                <li><a href="{{ route('modalidades') }}">Modalidades</a></li>
                <li><a href="#">Matrícula</a></li>
                <li><a href="#">Contato</a></li>
                <li><a href="{{ route('login') }}" class="login-btn">Login</a></li>
            </ul>
        </nav>
    </header>

    <main class="main-content">
        <h1 class="main-title">Modalidades Oferecidas</h1>

        <div class="cards-container">
            <article class="card">
                <div class="card-image">
                    Musculação
                </div>
                <div class="card-content">
                    <h3>Musculação</h3>
                    <p>Equipamentos modernos para treinamento de força e resistência muscular, com orientação de profissionais especializados.</p>
                </div>
            </article>

            <article class="card">
                <div class="card-image">
                    Funcional
                </div>
                <div class="card-content">
                    <h3>Treino Funcional</h3>
                    <p>Exercícios que trabalham diversos grupos musculares simultaneamente, melhorando a capacidade funcional do corpo.</p>
                </div>
            </article>

            <article class="card">
                <div class="card-image">
                    Ginástica
                </div>
                <div class="card-content">
                    <h3>Ginástica</h3>
                    <p>Atividades aeróbicas e de alongamento para melhorar flexibilidade, coordenação motora e condicionamento cardiovascular.</p>
                </div>
            </article>
        </div>
    </main>

</body>
</html>
