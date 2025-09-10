<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Instituto Federal</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
            background-color: #00843D;
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

        .contact-cards-container {
            display: flex;
            justify-content: center;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .contact-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            flex: 1;
            min-width: 300px;
            max-width: 550px;
            display: flex;
            flex-direction: column;
        }

        .contact-card h2 {
            color: #00843D;
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            font-weight: 700;
        }

        .contact-card p {
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 1rem;
            color: #555;
        }

        .contact-info-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 0.8rem;
            font-size: 1rem;
            color: #333;
        }

        .contact-info-item i {
            color: #00843D;
            margin-right: 10px;
            font-size: 1.2rem;
            width: 20px;
            text-align: center;
        }

        .map-container {
            flex-grow: 1;
            height: 350px;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                padding: 1rem;
            }
            .nav-links {
                margin-top: 1rem;
                flex-wrap: wrap;
                justify-content: center;
            }
            .main-content {
                padding: 2rem 1rem;
            }
            .main-title {
                font-size: 2rem;
            }
            .contact-cards-container {
                flex-direction: column;
                align-items: center;
            }
            .contact-card {
                width: 100%;
                max-width: 450px;
            }
            .map-container {
                height: 300px;
            }
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
                <li><a href="http://127.0.0.1:8000/dashboard">Início</a></li>
                <li><a href="{{ route('modalidades') }}">Modalidades</a></li>
                <li><a href="http://127.0.0.1:8000/matriculas/create">Matrícula</a></li>
                <li><a href="{{ route('contato') }}">Contato</a></li>
                <li><a href="http://127.0.0.1:8000/configuracoes" class="login-btn">Configurações</a></li>
            </ul>
        </nav>
    </header>

    <main class="main-content">
        <h1 class="main-title">Contato</h1>

        <div class="contact-cards-container">
            <div class="contact-card">
                <h2>Coordenação da Academia</h2>
                <p>Entre em contato conosco para mais informações sobre matrículas, horários ou dúvidas sobre nossas modalidades.</p>

                <h3>Informações de Contato</h3>
                <div class="contact-info-item">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>IFCE - Campus Cedro, Rua: Alameda José Quintino, s/n - Prado, Cedro - CE, 63400-000</span>
                </div>
                <div class="contact-info-item">
                    <i class="fa-solid fa-envelope"></i>
                    <span>academia@ifce.edu.br</span>
                </div>
                <div class="contact-info-item">
                    <i class="fa-solid fa-phone"></i>
                    <span>(85) 1234-5678</span>
                </div>
            </div>

            <div class="contact-card">
                <h2>Localização</h2>
                <div class="map-container">
                    <iframe
                        src="https://maps.app.goo.gl/vnktGtn5jRyjEyny8"
                        width="600"
                        height: 450px;
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </main>

</body>
</html>
