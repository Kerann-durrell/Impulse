<?php
    $visuel = [
        'images/clients/courbevoie/VISUEL 1.png',
        'images/clients/courbevoie/VISUEL 2.png',
        'images/clients/courbevoie/VISUEL 3.png',
        'images/clients/courbevoie/VISUEL 4.png',
        'images/clients/courbevoie/VISUEL 5.png',
        'images/clients/courbevoie/VISUEL 6.png',
        'images/clients/courbevoie/VISUEL 7.png',
        'images/clients/courbevoie/VISUEL 8.png',
    ];

    $photographie = [
        'images/clients/courbevoie/PHOTOGRAPHIE 1.png',
        'images/clients/courbevoie/PHOTOGRAPHIE 2.png',
        'images/clients/courbevoie/PHOTOGRAPHIE 3.png',
        'images/clients/courbevoie/PHOTOGRAPHIE 4.png',
        'images/clients/courbevoie/PHOTOGRAPHIE 5.png',
        'images/clients/courbevoie/PHOTOGRAPHIE 6.png',
        'images/clients/courbevoie/PHOTOGRAPHIE 7.png',
        'images/clients/courbevoie/PHOTOGRAPHIE 8.png',
        'images/clients/courbevoie/PHOTOGRAPHIE 9.png',
        'images/clients/courbevoie/PHOTOGRAPHIE 10.png',
        'images/clients/courbevoie/PHOTOGRAPHIE 11.png',
        'images/clients/courbevoie/PHOTOGRAPHIE 12.png',
        'images/clients/courbevoie/PHOTOGRAPHIE 13.png',
        'images/clients/courbevoie/PHOTOGRAPHIE 14.png',
        'images/clients/courbevoie/PHOTOGRAPHIE 15.png',
        'images/clients/courbevoie/PHOTOGRAPHIE 16.png',
    ];

?>


<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Montreuil HB</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>

        :root {
            --blue: #1B3083;
            --green: #11DD9E;
            --text-dark: #1a1a1a;
            --text-light: #ffffff;
            --bg-light: #F5F7FA;
        }

        :root {
            --primary-blue: #1B3083;
            --accent-green: #11dd9e;
            --text-dark: #1a1a1a;
            --text-light: #ffffff;
            --gray-bg: #f9f9f9;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

       body {
            font-family: 'Montserrat', sans-serif;
            color: var(--text-dark);
            overflow-x: hidden;
            background: linear-gradient(180deg, rgba(1, 13, 59, 1), rgba(27, 48, 131, 1));

        }

        a {
            text-decoration: none;
            color: inherit;
            transition: 0.3s;
        }

        ul {
            list-style: none;
        }


        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .text-center {
            text-align: center;
        }

        .text-green {
            color: var(--accent-green);
        }

        .text-blue {
            color: var(--primary-blue);
        }

        .text-white {
            color: var(--text-light);
        }

        .uppercase {
            text-transform: uppercase;
        }

        .bold {
            font-weight: 700;
        }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 700;
            cursor: pointer;
            transition: transform 0.2s;
            text-transform: uppercase;
            font-size: 0.9rem;
        }

        .btn:hover {
            transform: scale(1.05);
        }

        .btn-green {
            background-color: var(--accent-green);
            color: var(--primary-blue);
            border: none;
        }

        /* --- HEADER --- */
        header {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            padding: 25px 0;
        }

        header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            height: 40px;
        }

        nav ul {
            display: flex;
            gap: 30px;
        }

        nav a {
            color: var(--text-light);
            font-size: 0.9rem;
            font-weight: 600;
            text-transform: uppercase;
        }

        nav a:hover {
            color: var(--accent-green);
        }

        nav a:hover,
        nav a.active {
            opacity: 1;
            color: var(--accent-green);
        }

        nav a.active {
            border-bottom: 2px solid var(--accent-green);
            padding-bottom: 5px;
        }

        /* --- HERO SECTION --- */
        #hero {
            padding-top: 140px;
            padding-bottom: 60px;
            text-align: center;
            color: var(--text-light);
            position: relative;
        }

        /* Overlay optionnel pour texture si l'image hero-clients-bg est présente */
        #hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.15;
            pointer-events: none;
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        #hero h1 {
            font-size: 3.5rem;
            font-weight: 900;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        #hero p {
            max-width: 700px;
            margin: 0 auto 50px;
            font-size: 1rem;
            opacity: 0.95;
            font-weight: 400;
        }

        #cta {
            background: linear-gradient(135deg, #A8EED8 0%, #8AE6C7 100%);
            padding: 80px 20px;
            text-align: center;
        }

        #cta h2 {
            color: var(--blue);
            font-size: 2.2rem;
            font-weight: 900;
            margin-bottom: 10px;
            text-transform: uppercase;
            line-height: 1.2;
        }

        #cta p {
            color: var(--blue);
            margin-bottom: 30px;
            font-weight: 600;
            font-size: 1.05rem;
        }

        .btn {
            display: inline-block;
            padding: 15px 40px;
            border-radius: 50px;
            font-weight: 800;
            text-transform: uppercase;
            font-size: 0.9rem;
            background-color: var(--blue);
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            transform: scale(1.05);
        }

        footer {
            background-color: var(--primary-blue);
            color: var(--text-light);
            padding: 80px 0 30px;
            font-size: 0.9rem;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.5fr 1fr 1fr 1fr 1fr;
            gap: 40px;
            margin-bottom: 60px;
            align-items: flex-start;
        }

        .footer-col h4 {
            font-size: 1.1rem;
            margin-bottom: 25px;
            font-weight: 800;
            text-transform: uppercase;
        }

        .footer-col ul li {
            margin-bottom: 12px;
        }

        .footer-col ul li a {
            opacity: 0.8;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .footer-col ul li a:hover {
            opacity: 1;
            color: var(--accent-green);
        }

        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 30px;
            text-align: center;
            font-size: 0.85rem;
            opacity: 0.7;
            font-weight: 500;
        }


        @media (max-width: 1024px) {

            /* Tablette paysage / petits desktops */
            .services-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            #hero h1 {
                font-size: 3rem;
            }

            .chiffre-item h3 {
                font-size: 3rem;
            }

            .footer-grid {
                grid-template-columns: 1fr 1fr 1fr 1fr;
                /* Le logo passe au dessus */
            }

            .footer-grid>div:first-child {
                grid-column: span 4;
                text-align: center;
            }
        }

        @media (max-width: 768px) {

            /* Tablette portrait / gros mobiles */
            nav {
                display: none;
                /* Menu burger à implémenter si besoin */
            }

            header {
                padding: 15px 0;
            }

            #hero h1 {
                font-size: 2.2rem;
            }

            .histoire-wrapper {
                flex-direction: column;
            }

            .histoire-img-col {
                height: 300px;
            }

            .histoire-text-col {
                padding: 50px 30px;
            }

            .objectifs-wrapper {
                flex-direction: column;
                gap: 40px;
            }

            .objectifs-image {
                order: -1;
                /* Image au dessus sur mobile */
            }

            .footer-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .footer-grid>div:first-child {
                grid-column: span 2;
            }
        }

        @media (max-width: 480px) {

            .logo {
                padding: 10px 0;
                margin-bottom: 60px;
            }

            .services-grid {
                grid-template-columns: 1fr;
            }

            .chiffres-grid {
                flex-direction: column;
                gap: 40px;
            }

            .footer-grid {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .footer-grid>div:first-child {
                grid-column: span 1;
            }

            #hero {
                padding-top: 60px;
            }

            .section-title {
                font-size: 1.6rem;
            }
        }
    </style>
</head>
<body>

    <header>
        <div class="container">
            <a href="../index.html">
                <img src="../images/logo-impulse.png" alt="Impulse Logo" class="logo">
            </a>
            <nav>
                <ul>
                    <li><a href="../index.html">Accueil</a></li>
                    <li><a href="../client.php">Nos clients</a></li>
                    <li><a href="../services.php">Nos services</a></li>
                    <li><a href="../contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="hero">
        <div class="container hero-content">
            <h1 style="color: #11dd9e;">COURBEVOIE</h1>
            <p>Gestion complète de l’identité visuelle du club de Montreuil : visuels, réseaux sociaux, photos et vidéos.</p>
            <div class="img"><img src="../images/logo-courbevoie.png" alt="Montreuil HB"></div>
        </div>

    </section>

    <?php
        if (isset($visuel) && is_array($visuel)):
            echo '<section id="hero" style="padding: 60px 0; ">
                    <div class="container">
                       <h1 style="color: #11dd9e; font-size: 4rem;">VISUELS</h1>
                        <div class="projects-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">';

            foreach ($visuel as $image) {
                echo '<div class="project-item">
                        <img src="../' . $image . '" alt="Visuel Montreuil HB" style="width: 100%; border-radius: 8px;">
                      </div>';
            }

            echo '  </div>
                    </div>
                  </section>';
        endif;

        if (isset($photographie) && is_array($photographie)):
            echo '<section id="hero" style="padding: 60px 0; ">
                    <div class="container">
                       <h1 style="color: #11dd9e; font-size: 4rem;">PHOTOGRAPHIE</h1>
                        <div class="projects-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">';

            foreach ($photographie as $image) {
                echo '<div class="project-item">
                        <img src="../' . $image . '" alt="Photographie Montreuil HB" style="width: 100%; border-radius: 8px;">
                      </div>';
            }

            echo '  </div>
                    </div>
                  </section>';
        endif;

        if (isset($video) && is_array($video)):
            echo '<section id="hero" style="padding: 60px 0; ">
                    <div class="container">
                       <h1 style="color: #11dd9e; font-size: 4rem;">VIDÉOS</h1>
                        <div class="projects-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">';

            foreach ($video as $vid) {
                echo '<div class="project-item">
                        <video controls style="width: 100%; border-radius: 8px;">
                            <source src="../' . $vid . '" type="video/mp4">
                            Votre navigateur ne supporte pas la lecture de vidéos.
                        </video>
                      </div>';
            }

            echo '  </div>
                    </div>
                  </section>';
        endif;
    ?>

    <section id="cta">
        <div class="container">
            <h2>PRÊT À LANCER VOTRE<br>PROJET ?</h2>
            <p>Rejoignez les marques sportives qui nous font confiance</p>
            <a href="../contact.php"><button class="btn">Contactez-nous</button></a>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <img src="../images/logo-impulse.png" alt="Impulse Logo" class="logo" style="margin-bottom: 25px;">
                </div>

                <div class="footer-col">
                    <h4>Rubriques</h4>
                    <ul>
                        <li><a href="../index.html">Accueil</a></li>
                        <li><a href="../client.php">Nos clients</a></li>
                        <li><a href="../services.php">Nos services</a></li>
                        <li><a href="../contact.php">Contact</a></li>
                        <li><br><a href="#">Mentions légales</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Clients</h4>
                    <ul>
                        <li><a href="../client.php">Photo et vidéos</a></li>
                        <li><a href="../client.php">Créations graphique</a></li>
                        <li><a href="../client.php">Sponsoring et mécénat</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="../services.php">Contenu digitaux</a></li>
                        <li><a href="../services.php">Visibilité et Notoriété</a></li>
                        <li><a href="../services.php">Stratégie digital</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Contact</h4>
                    <ul>
                        <li><a href="mailto:Contact@impulse-club.fr">Contact@impulse-club.fr</a></li>
                        <li><a href="tel:0689671525">06 89 67 15 25</a></li>
                        <li style="margin-top: 20px;">
                            <a href="https://www.instagram.com/impulse_fr?igsh=MXd4cndpbThrcXFwMA==" aria-label="Instagram">
                                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#11DD9E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="copyright">
                2026 - Impulse club - Tout droit réservé
            </div>
        </div>
    </footer>
</body>
</html>