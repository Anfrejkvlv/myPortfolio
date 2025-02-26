<?php //include '../config/header.php'?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Ajout pour la réactivité -->
        <title>Accueil - myPortfolio</title>
        <link href="../style/style.css" rel="stylesheet" />
        <link href="../style/index.css" rel="stylesheet" />
        <link href="../style/contact.css" rel="stylesheet" />
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
<main >
    <section class="confirmation-section">
        <div class="confirmation-container">
            <?php
            include 'send_mail.php';
            global $name, $email, $message, $conn;
            include 'database/DatabaseCreat.php';

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = htmlspecialchars($_POST["nom"]);
                $email = htmlspecialchars($_POST["email"]);
                $message = htmlspecialchars($_POST["message"]);

                // Insertion des données dans la base de données
                $req = "INSERT INTO contact (Nom_prenom, email, message) VALUES (?, ?, ?)";
                $stm = $conn->prepare($req);
                $stm->bind_param("sss", $name, $email, $message);
                $stm->execute();

                // Affichage du message de confirmation stylé
                echo '<div class="confirmation-message">';
                echo '<h1>Merci, ' . $name . ' !</h1>';
                echo '<p>Votre message a été envoyé avec succès :</p>';
                echo '<p><strong>Email :</strong> ' . $email . '</p>';
                echo '<p><strong>Message :</strong> ' . $message . '</p>';
                echo '</div>';
            } else {
                echo '<p class="error-message">Accès non autorisé.</p>';
            }
            ?>
        </div>
    </section>
<?php include '../config/footer.php'?>