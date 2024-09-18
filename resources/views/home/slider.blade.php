<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donut Shop</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow-x: hidden;
        }

        header {
            /* Styles pour votre en-tête (header) */
        }

        main {
            /* Styles pour la section principale de votre page */
            position: relative; /* Nécessaire pour positionner les images absolument */
            height: 500px;
            background-color: #1bb1b1d0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .donut-container {
            position: absolute; /* Pour placer les images absolument par rapport à la page */
        }

        .donut-container img {
            width: 250px;
            opacity: 0;
            transform: translateY(100%);
            animation: slideIn 2s forwards, moveDonut 4s infinite linear;
        }

        /* Titre */
        h1 {
            text-align: center;
            text-transform: uppercase;
            font-family: verdana;
            font-size: 12em;
            font-weight: 700;
            color: #f5f5f5;
            text-shadow: 1px 1px 1px #919191,
                1px 2px 1px #919191,
                1px 3px 1px #919191,
                1px 4px 1px #919191,
                1px 5px 1px #919191,
                1px 6px 1px #919191,
                1px 7px 1px #919191,
                1px 8px 1px #919191,
                1px 9px 1px #919191,
                1px 10px 1px #919191,
                1px 18px 6px rgba(16,16,16,0.4),
                1px 22px 10px rgba(16,16,16,0.2),
                1px 25px 35px rgba(16,16,16,0.2),
                1px 30px 60px rgba(16,16,16,0.4);
        }

        /* Image de donut */
        .donut-letter {
            vertical-align: middle; /* Alignement vertical au milieu */
            display: inline-block;
            width: 300px; /* Largeur de votre image de donut */
            height: 300px; /* Hauteur de votre image de donut */
            background-image: url("/odonuts.png"); /* Chemin de votre image de donut */
            background-size: cover;
            background-position: center;
            animation: spin89345 2.9s linear infinite;
        }

        @keyframes spin89345 {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Première image */
        .donut1 {
            top: 10%; /* Position verticale */
            left: 10%; /* Position horizontale */
            animation-delay: 0.5s;
        }

        /* Deuxième image */
        .donut2 {
            top: 40%; /* Position verticale */
            left: 70%; /* Position horizontale */
            animation-delay: 0.5s;
        }

        /* Troisième image */
        .donut3 {
            top: 40%; /* Position verticale */
            left: 80%; /* Position horizontale */
            animation-delay: 0.5s;
        }

        /* Quatrième image */
        .donut4 {
            top: 50%; /* Position verticale */
            left: 20%; /* Position horizontale */
            animation-delay: 0.5s;
        }

        @keyframes slideIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes moveDonut {
            0% {
                opacity: 1;
                transform: translateY(0) translateX(50px) rotate (0deg);
            }
            10% {
                opacity: 1;
                transform: translateY(0) translateX(50px) rotate(0deg);
            }
            100% {
                opacity: 1;
                transform: translateY(-20px) translateX(0) rotate(360deg);
            }
        }

        nav {
            display: flex;
            justify-content: center;
            width: 100%;
            position: fixed; /* Navbar fixée en haut de la page */
            top: 0;
            z-index: 999; /* Pour s'assurer que la navbar est au-dessus de tout le contenu */
        }

        nav ul {
            list-style-type: none;
            margin-top: 20;
            padding: 0;
            display: flex;
        }

        nav li {
            margin: 0 10px;
            /* espacement entre les éléments de la liste */
            color: azure;
            color: white; /* couleur du texte */
            font-size: 18px;
            font-family: 'monospace';
        }

        nav a {
            text-decoration: none;
            /* police de caractère */
            transition: color 0.3s ease; /* transition fluide de la couleur du texte */
        }

        nav li:hover {
            color: #ffc107; /* couleur du texte au survol */
        }

        .main {
            width: 100%;
            height: 450px;
            background-color: #D14D72;
            display: flex;
            justify-content: center;
            flex-direction: column;
            color: #fff;
            padding: 0 20px;
            font-family: Arial;
        }

        @media (max-width: 1200px) {
            h1 {
                font-size: 8em;
            }
            .donut-letter {
                width: 200px;
                height: 200px;
            }
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 5em;
            }
            .donut-letter {
                width: 150px;
                height: 150px;
            }
            .donut-container img {
                width: 200px;
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 3em;
            }
            .donut-letter {
                width: 100px;
                height: 100px;
            }
            .donut-container img {
                width: 150px;
            }
            nav li {
                font-size: 14px;
                margin: 0 5px;
            }
        }

    </style>
</head>
<body>

    <div class="main featured-section">
        <h1>D<span class="donut-letter"></span>NUTS</h1>
    </div>
    <!--<svg viewBox="0 0 500 200">
        <path d="M 0 30 C 150 100 280 0 500 20 L 500 0 L 0 0" fill="#033f3f"></path>
    </svg>-->

</body>
</html>











