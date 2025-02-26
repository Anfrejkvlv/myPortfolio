<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Ajout pour la réactivité -->
    <title>Accueil - myPortfolio</title>
    <link href="../style/style.css" rel="stylesheet" />
    <link href="../style/index.css" rel="stylesheet" />
    <link href="../style/a-propos.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope&family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <nav>
        <a href="index.html" class="lien-icone">
            <img src="../images/lce1.png" alt="Mon Logo" />
        </a>
        <div>
            <a href="index.html">Accueil</a>
            <a href="a-propos.php">À propos</a>
            <a href="portfolio.php">Portfolio</a>
        </div>
    </nav>
</header>
<main class="a-propos-main">
    <section>
        <h1>À propos </h1>
        <div class="carre-contenu">
            <p>Étudiant en Informatique | Passionné par le Développement Web et les Technologies.

                Actuellement en 3e année de Licence Informatique à la Faculté des Sciences et Techniques de Béni Mellal,
                je suis passionné par le développement web et la création de solutions innovantes.
                Je suis motivé par l'apprentissage constant et la mise en pratique de mes connaissances dans des projets concrets.
                Mes valeurs incluent l'adaptabilité, le travail d'équipe, et une forte curiosité pour les nouvelles technologies.
            </p>
            <p class="pr">
            <p><span>Intérêts :</span> Développement Web, Bases de Données, Programmation Orientée Objet, Collaboration en Équipe.</p>
            <p><span>Objectif :</span> Apprendre, grandir et contribuer à des projets numériques de qualité.</p>
            </p>
            <h2>Mes compétences incluent le </h2>
            <ul><h3>Développement:</h3>
                <li>Front-End: HTML, CSS, JavaScript</li>
                <li>Back-End :PHP, MySQL</li>
                <li>Langages de programmation : Java et C</li>
            </ul>
            <ul><h3>Autres</h3>
                <li>Design graphique : Adobe Illustrator</li>
            </ul>
            <h2>Services</h2>
            <ul>
                <li>Portrait seul ou à plusieurs</li>
                <li>Shooting mode</li>
                <li>Retouches sur mesure</li>
                <li>Développement</li>
            </ul>
        </div>
        <div>
            <a href="portfolio.php" class="cta">VOIR MON PORTFOLIO</a>
        </div>
    </section>
<?php include '../config/footer.php'?>