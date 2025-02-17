
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>À propos</title>
    <link href="style/style.css" rel="stylesheet" />
    <link href="style/a-propos.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope&family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
<header>
    <nav>
        <a href="index.html" class="lien-icone">
            <img src="images/lce1.png" alt="Logo Robbie Lens" />
        </a>
        <div>
            <a href="index.html">Accueil</a>
            <a href="a-propos.php">À propos</a>
            <a href="portfolio.php">Portfolio</a>
        </div>
    </nav>
</header>
<main class="a-propos-main">
    <section  style="text-align: center; padding-left: 245px">
        <div>
    <?php include 'send_mail.php';
    global $name,$email,$message,$conn;
    include 'database/DatabaseCreat.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST["nom"]);
        $email = htmlspecialchars($_POST["email"]);
        $message = htmlspecialchars($_POST["message"]);

        $req="INSERT INTO contact (Nom_prenom, email, message) VALUES (?,?,?)";
        $stm=$conn->prepare($req);
        $stm->bind_param("sss",$name,$email,$message);
        $stm->execute();

        //mail_process($name,$message,$email);
        //process_mail1($message,$name,$email);
        echo "<h1 style='font-size: 25px'>Merci, $name !</h1>";
        echo "<p>Votre message a été envoyé avec succès :</p>";
        echo "<p><strong>Email :</strong> $email</p>";
        echo "<p><strong>Message :</strong> $message</p>";

    } else {
        echo "<p>Accès non autorisé.</p>";
    }
    ?>
        </div>
    <?php include 'config/footer.php'?>
