@extends('layouts.app')

@section('content')
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f2f5;
            color: #333;
        }

        .main-content {
            min-height: 80vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }

        .main-title {
            color: #00843D;
            font-size: 2.2rem;
            margin-bottom: 2rem;
            font-weight: 700;
            text-align: center;
        }

        .contact-cards-container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .contact-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            flex: 1;
            min-width: 320px;
            max-width: 400px; /* padronizado */
            display: flex;
            flex-direction: column;
            text-align: left; /* letras retas e alinhadas à esquerda */
        }

        .contact-card h2 {
            color: #00843D;
            font-size: 1.6rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .contact-card h3 {
            color: #00843D;
            font-size: 1.2rem;
            margin-top: 1rem;
            margin-bottom: 0.8rem;
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
            align-items: center;
            margin-bottom: 0.8rem;
            font-size: 1rem;
            color: #333;
        }

        .contact-info-item span {
            margin-left: 8px;
        }

        .map-container {
            width: 100%;
            height: 300px;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        /* Adicionando emojis nos itens de contato */
        .contact-info-item.location::before {
            content: "📍";
        }

        .contact-info-item.email::before {
            content: "✉️";
        }

        .contact-info-item.phone::before {
            content: "📞";
        }

        @media (max-width: 768px) {
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
                max-width: 400px;
            }
            .map-container {
                height: 250px;
            }
        }
    </style>

    <div class="main-content">
        <h1 class="main-title">Contato</h1>

        <div class="contact-cards-container">
            <div class="contact-card">
                <h2>Coordenação da Academia</h2>
                <p>Entre em contato conosco para mais informações sobre matrículas, horários ou dúvidas sobre nossas modalidades.</p>

                <h3>Informações de Contato</h3>
                <div class="contact-info-item location">
                    <span>IFCE - Campus Cedro, Rua: Alameda José Quintino, s/n - Prado, Cedro - CE, 63400-000</span>
                </div>
                <div class="contact-info-item email">
                    <span>academia@ifce.edu.br</span>
                </div>
                <div class="contact-info-item phone">
                    <span>(85) 3455-3064</span>
                </div>
            </div>

            <div class="contact-card">
                <h2>Localização</h2>
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3963.370010713009!2d-39.0560549!3d-6.6008556!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7a30a0c2af16d77%3A0x5d0b763014d0f76e!2sInstituto%20Federal%20de%20Educa%C3%A7%C3%A3o%2C%20Ci%C3%AAncia%20e%20Tecnologia%20do%20Cear%C3%A1%20%7C%20Campus%20Cedro!5e0!3m2!1spt-BR!2sbr!4v1757607537422!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
