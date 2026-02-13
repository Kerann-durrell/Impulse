<?php
// --- CONFIGURATION & DONNÉES ---

// Chemin de base pour les images
$basePath = "/";

// 1. Tableau des logos partenaires (Hero)
$logos = [
    ["file" => "./images/logo-courbevoie.png", "alt" => "Courbevoie Handball", "link" => "./clients/courbevoie.php"],
    ["file" => "./images/logo-csd-ffhb.png", "alt" => "93 Handball", "link" => "./clients/cdhb93.php"],
    ["file" => "./images/logo-rosny.png",      "alt" => "Rosny Handball", "link" => "./clients/rosny.php"],
    ["file" => "./images/logo-vhb.png",        "alt" => "VHB", "link" => "./clients/villemobile.php"],
    ["file" => "./images/logo-93handball.png",   "alt" => "fc93", "link" => "./clients/fc93.php"],
    ["file" => "./images/logo-mhb.png",        "alt" => "MHB", "link" => "./clients/montreuilHB.php"]
];

// 2. Tableau des cartes projets (Grille)
$projects = [
    [
        "badge" => "Montreuil",
        "img"   => "./images/projet-montreuil.jpg",
        "desc"  => "Gestion complète de l'identité visuelle du club de Montreuil : Visuels, réseaux sociaux, photos et vidéos.",
        "alt"   => "Équipe de Montreuil",
        "link"  => "./clients/montreuilHB.php",
    ],
    [
        "badge" => "Rosny",
        "img"   => "./images/projet-rosny.jpg",
        "desc"  => "Gestion de la production photographique pour le club de Rosny.",
        "alt"   => "Joueurs de Rosny",
        "link"  => "./clients/rosny.php",
    ],
    [
        "badge" => "CDHB93",
        "img"   => "./images/projet-cdhb93.jpg",
        "desc"  => "Production et gestion des contenus visuels du Comité 93 lors des tournois (photos, vidéos, visuels et stories).",
        "alt"   => "Comité 93 Handball",
        "link"  => "./clients/cdhb93.php",
    ],
    [
        "badge" => "Courbevoie",
        "img"   => "./images/projet-courbevoie.jpg",
        "desc"  => "Création de visuels et production photo pour le club de Courbevoie.",
        "alt"   => "Club de Courbevoie",
        "link"  => "./clients/courbevoie.php",
    ],
    [
        "badge" => "FC93",
        "img"   => "./images/projet-fc93.jpg",
        "desc"  => "Définition de l'identité visuelle du FC93 et réalisation des visuels de match.",
        "alt"   => "Joueur du FC93",
        "link"  => "./clients/fc93.php",
    ],
    [
        "badge" => "Villemomble",
        "img"   => "./images/projet-villemomble.jpg",
        "desc"  => "Gestion des visuels et des contenus photo du club de Villemomble.",
        "alt"   => "Équipe de Villemomble",
        "link"  => "./clients/villemobile.php",
    ]
];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impulse - Nos Clients</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Montserrat:wght@400;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        /* --- VARIABLES & RESET --- */
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
            font-family: 'Vito Wide', 'Montserrat', sans-serif;
            color: var(--text-dark);
            line-height: 1.6;
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: 0.3s;
        }

        ul {
            list-style: none;
        }

        img {
            max-width: 100%;
            display: block;
        }

        /* --- UTILITIES --- */
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

        /* Titres de section (NOS SERVICES, etc.) */
        .section-title {
            font-size: 2rem;
            font-weight: 900;
            margin-bottom: 3rem;
            text-transform: uppercase;
            letter-spacing: -0.5px;
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
            background: linear-gradient(180deg, rgba(1, 13, 59, 1), rgba(27, 48, 131, 1));
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

        /* Bandeau Logos */
        .logos-row {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 40px;
            flex-wrap: wrap;
            padding: 0 20px;
        }

        .client-logo {
            height: 55px;
            width: auto;
            filter: brightness(0) invert(1);
            /* Rend les logos blancs */
            opacity: 0.9;
            transition: opacity 0.3s;
        }

        .client-logo:hover {
            opacity: 1;
        }

        /* --- GRILLE PROJETS --- */
        #projects {
            padding: 80px 0;
            background-color: #fff;
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            /* Desktop: 3 colonnes */
            gap: 30px;
        }

        .project-card {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            display: flex;
            flex-direction: column;
            transition: transform 0.3s ease;
            height: 100%;
            cursor: pointer;
        }

        .project-card:hover {
            transform: translateY(-5px);
        }

        .card-img-wrapper {
            position: relative;
            height: 240px;
            width: 100%;
        }

        .card-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: var(--green);
            color: #1a1a1a;
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 800;
            text-transform: uppercase;
        }

        .card-content {
            padding: 25px;
            flex-grow: 1;
        }

        .card-content p {
            font-size: 0.95rem;
            color: #333;
            line-height: 1.6;
            font-weight: 500;
        }

        /* --- CTA BANDEAU --- */
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

        /* --- RESPONSIVE --- */
        @media (max-width: 1024px) {

            /* Tablette */
            .projects-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            #hero h1 {
                font-size: 2.8rem;
            }

            .logos-row {
                gap: 25px;
            }
        }

        @media (max-width: 768px) {

            /* Mobile */
            nav {
                display: none;
            }

            /* Menu burger simplifié */
            header {
                padding: 20px 0;
            }

            .projects-grid {
                grid-template-columns: 1fr;
            }

            .footer-grid {
                grid-template-columns: 1fr;
                text-align: center;
            }

            #hero h1 {
                font-size: 2.2rem;
            }

            #hero p {
                font-size: 0.9rem;
                padding: 0 10px;
            }
        }
    </style>
</head>

<body>

    <header>
        <div class="container">
            <a href="/">
                <img src="<?php echo $basePath; ?>.././images/logo-impulse.png" alt="Impulse" class="logo">
            </a>
            <nav>
                <ul>
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="#" class="active">Nos clients</a></li>
                    <li><a href="services.php">Nos services</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="hero">
        <div class="container hero-content">
            <h1 style="color: #11dd9e;">NOS CLIENTS</h1>
            <p>Clubs, marques, athlètes ou Institutions : ils nous font confiance. Découvrez les clients qui partagent notre vision du sport et de la performance.</p>

            <div class="logos-row" style="overflow-x: scroll; white-space: nowrap; padding-bottom: 10px; display: flex; writing-mode: horizontal-tb; flex-wrap: nowrap;direction: row;">
                <?php foreach($logos as $logo): ?>
                <a href="<?php echo $logo['link']; ?>">
                    <img src="<?php echo $basePath . $logo['file']; ?>" alt="<?php echo htmlspecialchars($logo['alt']); ?>" class="client-logo">
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="projects">
        <div class="container">
            <div class="projects-grid">
                <?php foreach($projects as $project): ?>
                <a href="<?php echo isset($project['link']) ? $project['link'] : '#'; ?>" style="text-decoration: none; color: inherit;">
                    <article class="project-card">
                        <div class="card-img-wrapper">
                            <img src="<?php echo $basePath . $project['img']; ?>" alt="<?php echo htmlspecialchars($project['alt']); ?>">
                            <span class="badge">
                                <?php echo htmlspecialchars($project['badge']); ?>
                            </span>
                        </div>
                        <div class="card-content">
                            <p>
                                <?php echo htmlspecialchars($project['desc']); ?>
                            </p>
                        </div>
                    </article>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

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
                    <img src="./images/logo-impulse.png" alt="Impulse Logo" class="logo" style="margin-bottom: 25px;">
                </div>

                <div class="footer-col">
                    <h4>Rubriques</h4>
                    <ul>
                        <li><a href="./index.html">Accueil</a></li>
                        <li><a href="./client.php">Nos clients</a></li>
                        <li><a href="./services.php">Nos services</a></li>
                        <li><a href="./contact.php">Contact</a></li>
                        <li><br><a href="#">Mentions légales</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Clients</h4>
                    <ul>
                        <li><a href="./client.php">Photo et vidéos</a></li>
                        <li><a href="./client.php">Créations graphique</a></li>
                        <li><a href="./client.php">Sponsoring et mécénat</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="./services.php">Contenu digitaux</a></li>
                        <li><a href="./services.php">Visibilité et Notoriété</a></li>
                        <li><a href="./services.php">Stratégie digital</a></li>
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