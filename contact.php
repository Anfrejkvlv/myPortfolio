<?php include 'config/headerC.php'?>
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