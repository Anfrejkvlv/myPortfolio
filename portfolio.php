<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>myPorfolio</title>
    <link href="style/style.css" rel="stylesheet" />
    <link href="style/portfolio.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope&family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            <a href="index.html" class="lien-icone">
                <img src="images/lce1.png" alt="Mon logo" />
            </a>
            <div>
                <a href="index.html">Accueil</a>
                <a href="a-propos.php">À propos</a>
                <a href="portfolio.php">Portfolio</a>
            </div>
        </nav>
    </header>
    <main>
        <section>
            <h1>Portfolio</h1>
        </section>
            <section class="accueil-introduction">
                <div>
                    <h2>Carnet de Santé Numérique</h2>
                    <p>
                        Ce projet porte sur la création d’une application PHP permettant d’ajouter, modifier,
                        supprimer les patients, les médecins et également la gestion des rendez-vous entre le médecin
                        et son patient puis l’ajout des documents tels les antécédents médicaux, avec stockage des
                        données dans MySQL.
                        <a href="#">lien du site</a>
                    </p>
                </div>
                <img src="images/csn%20(2).png" class="img-fluid" alt="Image du CSN" />
            </section>

<?php include 'config/footer.php'?>