@extends('layouts.app')

@section('content')
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f2f5;
            color: #333;
        }

        .main-content {
            min-height: 80vh; /* ocupa quase toda a tela */
            display: flex;
            flex-direction: column;
            justify-content: center; /* centraliza verticalmente */
            align-items: center;     /* centraliza horizontalmente */
            padding: 2rem;
        }

        .main-title {
            color: #00843D;
            font-size: 2.2rem;
            margin-bottom: 2rem;
            font-weight: 700;
            text-align: center;
        }

        .cards-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 1.5rem;
            flex-wrap: wrap;
        }

        .card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 250px;
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
            font-size: 2rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 140px;
        }

        .card-content {
            padding: 1rem;
        }

        .card-content h3 {
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
            color: #333;
        }

        .card-content p {
            font-size: 0.9rem;
            line-height: 1.4;
            color: #555;
        }
    </style>

    <div class="main-content">
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
    </div>
@endsection
