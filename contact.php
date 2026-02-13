<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impulse - Ensemble vers votre réussite</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <style>
         :root {
            --blue: #1B3083;
            --green: #11DD9E;
            --text-dark: #1a1a1a;
            --text-light: #ffffff;
            --bg-light: #F5F7FA;
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

        .footer-col ul {
            padding: 0; margin: 0;
            text-align: left;
        }
    </style>
</head>

<body>

    <header style="margin-top: 10px;">
        <div class="container">
            <a href="/">
                <img src="./images/logo-impulse.png" alt="Impulse" class="logo">
            </a>
            <nav>
                <ul>
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="client.php">Nos clients</a></li>
                    <li><a href="services.php">Nos services</a></li>
                    <li><a href="contact.php" class="active">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="hero">
        <div class="container hero-content">
            <h1 style="color: #11dd9e;">CONTACTEZ NOUS</h1>
            <p>Un projet, une idée ou une ambition sportive ? Contactez-nous et donnons ensemble  de l’élan à votre communication.</p>

            <div class="logos-row" style="overflow-x: scroll; white-space: nowrap; padding-bottom: 10px; display: flex; writing-mode: horizontal-tb; flex-wrap: nowrap;direction: row;">
                <?php foreach($logos as $logo): ?>
                <img src="<?php echo $basePath . $logo['file']; ?>" alt="<?php echo htmlspecialchars($logo['alt']); ?>" class="client-logo">
                <?php endforeach; ?>
            </div>
        </div>
    </section>

<section class="contact-section py-5 bg-white">
            <div class="container py-lg-5">
                <div class="row">
                    
                    <div class="col-lg-5 pe-lg-5">
                        <h1 class="fw-bold mb-5" style="color: #0a1a2b;">NOS <span class="text-emerald fw-bold mb-5"> COORDONNÉES</span></h1>

                        <div class="d-flex align-items-start mb-4">
                            <div class="icon-box me-3">
                                <span class="material-symbols-outlined">location_on</span>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1" style="color: #0a1a2b;">ADRESSE</h6>
                                <p class="text-muted">Gymnase Auguste Delaune<br>2 rue de Nanteuil, 93100 Montreuil, France</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mb-4">
                            <div class="icon-box me-3">
                                <span class="material-symbols-outlined">phone_enabled</span>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1 text-uppercase" style="color: #0a1a2b;">Téléphone</h6>
                                <p class="text-muted">06 89 61 15 25<br>Benjamin Rousseau</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mb-5">
                            <div class="icon-box me-3">
                                <span class="material-symbols-outlined">mail</span>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1" style="color: #0a1a2b;">EMAIL</h6>
                                <p class="text-muted">contact@impulseclub.fr</p>
                            </div>
                        </div>

                        <div class="opening-hours p-4 text-white rounded-4 mb-4">
                            <h5 class="fw-bold mb-3">HORAIRES D'OUVERTURE</h5>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Lundi - Vendredi</span>
                                <span>9h00 - 18h00</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span>Samedi - Dimanche</span>
                                <span>Fermé</span>
                            </div>
                        </div>

                        <div class="map-container rounded-4 overflow-hidden">
                            <img src="./images/localisation.jpeg" alt="Localisation" class="w-100 img-map">
                        </div>
                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0">
                        <div class="form-container p-4 p-lg-5 rounded-5 text-white">
                            <h2 class="fw-bold mb-4">ENVOYEZ-NOUS <br> UN MESSAGE</h2>
                            
                            <form action="#" method="POST">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Nom *</label>
                                        <input type="text" class="form-control" placeholder="Votre nom" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Prénom *</label>
                                        <input type="text" class="form-control" placeholder="Votre prénom" required>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Email *</label>
                                    <input type="email" class="form-control" placeholder="votre.email@exemple.fr" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Téléphone *</label>
                                    <input type="tel" class="form-control" placeholder="+33 1 23 45 67 89">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Entreprise / Organisation *</label>
                                    <input type="text" class="form-control" placeholder="Votre entreprise">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Service concerné *</label>
                                    <select class="form-select">
                                        <option selected disabled>Sélectionnez un service</option>
                                        <option>Stratégie de marque</option>
                                        <option>Communication digitale</option>
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Message *</label>
                                    <textarea class="form-control" rows="4" placeholder="Décrivez-nous votre projet..."></textarea>
                                </div>

                                <button type="submit" class="btn btn-emerald w-100 py-3 fw-bold rounded-pill">
                                    <i class="bi bi-send-fill me-2"></i> Envoyer le message
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
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
                            <a href="#" aria-label="Instagram">
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