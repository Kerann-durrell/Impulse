<?php

$services = [
    [
        'titre' => 'STRATÉGIE DE MARQUE',
        'intro' => 'Nous créons des identités de marque fortes et différenciantes pour les acteurs du sport.',
        'desc'  => 'De la définition du positionnement à la création de l\'identité visuelle, nous construisons des marques qui résonnent avec leur audience.',
        'liste' => ['Audit de marque', 'Positionnement stratégique', 'Identité visuelle complète', 'Charte graphique', 'Guidelines de marque'],
        'image' => './images/projet-rosny.jpg', // Remplace par ton image rouge
        'sens'  => 'normal' // Image à droite
    ],
    [
        'titre' => 'COMMUNICATION DIGITALE',
        'intro' => 'Notre équipe développe et anime votre présence en ligne avec des contenus créatifs et engageants.',
        'desc'  => 'Nous gérons l\'ensemble de votre écosystème digital pour maximiser votre impact.',
        'liste' => ['Gestion des réseaux sociaux', 'Création de contenus', 'Community management', 'Stratégie d\'influence', 'Publicité digitale'],
        'image' => './images/projet-courbevoie.jpg', // Remplace par ton image équipe
        'sens'  => 'inverse' // Image à gauche
    ]
];

$packs = [
    [
        'nom' => 'IDENTITÉ VISUELLE',
        'duree' => 'Sans engagement',
        'details' => '',
        'inclus' => ['Audit de marque', 'Logo & Déclinaisons', 'Charte Graphique', 'Cartes de visite'],
        'highlight' => false
    ],
    [
        'nom' => 'MEDIA PRO',
        'duree' => '10 mois de couverture',
        'details' => '(20% de commission)',
        'inclus' => ['Charte Graphique', 'Template Social Media', 'Création d\'identité de marque', '8 matchs avec photographe', '8 affiches de matchs', 'Stories de matchs'],
        'highlight' => true // Pack mis en avant (milieu)
    ],
    [
        'nom' => 'MEDIA PREMIUM',
        'duree' => '10 mois de couverture',
        'details' => '(20% de commission)',
        'inclus' => ['Tout le pack PRO', 'Vidéos highlights matchs', 'Interviews joueurs', 'Shooting photo officiel', 'Gestion complète Instagram'],
        'highlight' => false
    ]
];

$basePath = "./images/"; // Chemin de base pour les images
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impulse - Nos Services</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700;800&display=swap" rel="stylesheet">

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

/* --- HERO --- */
.hero {
    text-align: center;
    padding: 80px 0 60px;
    background: linear-gradient(180deg, rgba(1, 13, 59, 1), rgba(27, 48, 131, 1));
}

.hero h1 {
    font-size: 3.5rem;
    text-transform: uppercase;
    margin-bottom: 20px;
    letter-spacing: 2px;
    color: #11dd9e
}

.hero-text {
    max-width: 700px;
    margin: 0 auto;
    color: #ccc;
    font-size: 1.1rem;
}

/* --- SERVICES --- */
.services-section { padding: 60px 0; }

.service-block {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 50px;
    margin-bottom: 100px;
}

.service-block.inverse { flex-direction: row-reverse; }

.service-content { flex: 1; }

.service-content h2 {
    font-size: 2.5rem;
    margin-bottom: 20px;
    text-transform: uppercase;
    border-left: 4px solid var(--mint-green);
    padding-left: 20px;
    line-height: 1;
}

.service-content .intro { font-size: 1.1rem; margin-bottom: 15px; color: #fff; }
.service-content .desc { color: var(--gray-text); margin-bottom: 30px; }

.service-list li {
    margin-bottom: 10px;
    padding-left: 25px;
    position: relative;
    color: #ddd;
}

.service-list li::before {
    content: '•';
    color: var(--mint-green);
    position: absolute;
    left: 0;
    font-size: 1.5rem;
    line-height: 1rem;
}

.service-image { flex: 1; }
.service-image img {
    width: 100%;
    border-radius: 20px;
    box-shadow: 0 20px 50px rgba(0,0,0,0.5);
    border: 1px solid rgba(255,255,255,0.1);
}

/* --- PACKS --- */
.packs-section {
    padding: 80px 0;
    background: #081026; /* Légèrement plus clair */
}

.section-title { text-align: center; font-size: 2.5rem; margin-bottom: 10px; }
.section-subtitle { text-align: center; color: var(--gray-text); margin-bottom: 60px; }

.packs-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    align-items: start;
}

.pack-card {
    background: #fff;
    color: #050A19; /* Texte noir sur fond blanc */
    padding: 40px 30px;
    border-radius: 20px;
    text-align: center;
    transition: transform 0.3s;
}

/* Effet survol */
.pack-card:hover { transform: translateY(-10px); }

/* Mise en avant du pack central */
.pack-card.highlighted {
    border: 4px solid var(--mint-green);
    transform: scale(1.05);
}

.pack-head h3 { font-size: 1rem; color: #888; text-transform: uppercase; }
.pack-head h3 span {
    display: block;
    font-size: 1.8rem;
    font-weight: 800;
    color: #050A19;
    margin: 10px 0;
}

.engagement-badge {
    background: #eee;
    padding: 8px 15px;
    border-radius: 50px;
    font-weight: 700;
    font-size: 0.85rem;
    display: inline-block;
    margin-bottom: 5px;
}

.pack-body {
    margin: 30px 0;
    text-align: left;
    border-top: 1px solid #eee;
    padding-top: 20px;
}

.label-inclus {
    font-size: 0.75rem;
    font-weight: 700;
    color: #aaa;
    margin-bottom: 15px;
    letter-spacing: 1px;
}

.pack-body ul li {
    font-size: 0.95rem;
    margin-bottom: 10px;
    color: #333;
}

.btn-pack {
    display: block;
    padding: 15px;
    border: 2px solid #050A19;
    border-radius: 30px;
    font-weight: bold;
}

.pack-card:hover .btn-pack {
    background: #050A19;
    color: #fff;
}

/* --- CTA BANNER --- */
.cta-banner {
    background: var(--mint-green);
    color: #050A19;
    text-align: center;
    padding: 80px 20px;
}

.cta-banner h2 { font-size: 2.2rem; margin-bottom: 10px; }
.cta-banner p { margin-bottom: 30px; font-weight: 500; }

.btn-cta {
    background: #050A19;
    color: #fff;
    padding: 15px 40px;
    border-radius: 30px;
    font-weight: bold;
}


/* --- RESPONSIVE --- */
@media (max-width: 900px) {
    .service-block, .service-block.inverse { flex-direction: column; text-align: center; }
    .service-content h2 { border-left: none; border-bottom: 4px solid var(--mint-green); padding-bottom: 10px; display: inline-block; padding-left: 0; }
    .service-list li { text-align: left; display: inline-block; }
    .packs-grid { grid-template-columns: 1fr; }
    .footer-content { grid-template-columns: 1fr 1fr; }
    .pack-card.highlighted { transform: none; }
}

            :root {
            --blue: #1B3083;
            --green: #11DD9E;
            --text-dark: #1a1a1a;
            --text-light: #ffffff;
            --bg-light: #F5F7FA;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--text-dark);
            line-height: 1.5;
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

        /* --- TYPOGRAPHIE --- */
        /* Application de Vito Wide sur les titres, avec fallback Montserrat */
        h1,
        h2,
        h3,
        h4,
        .btn,
        .badge {
            font-family: 'Vito Wide', 'Montserrat', sans-serif;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
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
            /* Dégradé Bleu vers Vert */
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

        /* --- FOOTER --- */
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
        
    </style>
</head>
<body>

    <header>
        <div class="container">
            <a href="/">
                <img src="<?php echo $basePath; ?>logo-impulse.png" alt="Impulse" class="logo">
            </a>
            <nav>
                <ul>
                    <li><a href="./index.html">Accueil</a></li>
                    <li><a href="./client.php">Nos clients</a></li>
                    <li><a href="./services.php" class="active">Nos services</a></li>
                    <li><a href="./contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <br><br>
            <h1><b>NOS SERVICES</b></h1>
            <p class="hero-text" style="color: white;">Stratégie, création et activation : découvrez l'ensemble de nos services pensés pour faire rayonner les acteurs du sport. </p>
        </div>
    </section>

    <section class="services-section " style="background-color: #fffffffa; color: #160049ff;">
        <div class="container">
            <?php foreach($services as $service): ?>
                <div class="service-block <?php echo ($service['sens'] === 'inverse') ? 'inverse' : ''; ?>">
                    <div class="service-content">
                        <h2><?php echo $service['titre']; ?></h2>
                        <p class="intro" style="color: #2f009cff;"><strong><?php echo $service['intro']; ?></strong></p>
                        <p class="desc" style="color: #3100a5ff;"><?php echo $service['desc']; ?></p>
                        
                        <ul class="service-list">
                            <?php foreach($service['liste'] as $item): ?>
                                <li style="color: #5107ffff;"><?php echo $item; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="service-image">
                        <img src="<?php echo $service['image']; ?>" alt="<?php echo $service['titre']; ?>">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="packs-section">
        <div class="container">
            <h1 style="color: #11dd9e; text-align: center; font-size: 4rem;">NOS PACKS</h1>
            <p class="section-subtitle">Estimez le budget de votre projet en quelques clics </p>

            <div class="packs-grid">
                <?php foreach($packs as $pack): ?>
                    <div class="pack-card <?php echo $pack['highlight'] ? 'highlighted' : ''; ?>">
                        <div class="pack-head">
                            <h3>Le Pack<br><span><?php echo $pack['nom']; ?></span></h3>
                            <div class="engagement-badge">
                                <?php echo $pack['duree']; ?>
                            </div>
                            <?php if(!empty($pack['details'])): ?>
                                <small><?php echo $pack['details']; ?></small>
                            <?php endif; ?>
                        </div>

                        <div class="pack-body">
                            <p class="label-inclus">INCLUS DANS LE PACK</p>
                            <ul>
                                <?php foreach($pack['inclus'] as $feature): ?>
                                    <li>→ <?php echo $feature; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <div class="pack-footer">
                            <a href="#" class="btn-pack">En savoir plus</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="cta-banner">
        <h2>PRÊT À LANCER VOTRE PROJET ?</h2>
        <p>Rejoignez les marques sportives qui nous font confiance [cite: 48]</p>
        <a href="#" class="btn-cta">Contactez-nous</a>
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