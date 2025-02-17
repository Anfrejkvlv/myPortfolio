<?PHP //phpinfo();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

function mail_process($nom,$message,$email)
{   $mail = new PHPMailer(true);
    try {
// Configuration du serveur
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Définir le serveur SMTP
        $mail->SMTPAuth = true;
        $mail->Username = 'kilingm19@@gmail.com'; // Votre adresse e-mail
        $mail->Password = 'Baba@2020'; // Votre mot de passe
        $mail->SMTPSecure = 'tls'; // Activer le chiffrement TLS
        $mail->Port = 587; // Port TCP à utiliser

// Destinataires
        $mail->setFrom($email, $nom);
        $mail->addAddress('kilingm19@@gmail.com');

// Contenu
        $mail->isHTML(true);
        $mail->Subject = 'Besoin de mes services';
        $mail->Body    = ''.$message;

        $mail->send();
        echo 'E-mail envoyé avec succès';
    } catch (Exception $e) {
        echo "L'e-mail n'a pas pu être envoyé. Erreur : {$mail->ErrorInfo}";
    }
}

function process_mail1($msg,$nm,$em){

    $to = "kilingm19@gmail.com"; // Adresse e-mail du destinataire
    $subject = "Besoin d'aide"; // Sujet de l'e-mail
    $message = "".$msg; // Corps du message
    $headers = "From: ".$em."\r\n"; // En-têtes de l'e-mail

// Envoyer l'e-mail
    if (mail($to, $subject, $message, $headers)) {
        echo "E-mail envoyé avec succès.";
    } else {
        echo "Échec de l'envoi de l'e-mail.";
    }

}
{

}

?>