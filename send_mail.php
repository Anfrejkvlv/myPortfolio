<?php
// Inclure l'autoloader de Composer pour PHPMailer
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/**
 * Envoie un e-mail en utilisant PHPMailer.
 *
 * @param string $nom    Le nom de l'expéditeur.
 * @param string $message Le message à envoyer.
 * @param string $email  L'adresse e-mail de l'expéditeur.
 * @return void
 */
function mail_process($nom, $message, $email)
{
    $mail = new PHPMailer(true);

    try {
        // Configuration du serveur SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Serveur SMTP de Gmail
        $mail->SMTPAuth = true;
        $mail->Username = 'kil@gmail.com'; // Remplacez par votre adresse Gmail
        $mail->Password = '234670'; // Remplacez par votre mot de passe Gmail
        $mail->SMTPSecure = 'tls'; // Chiffrement TLS
        $mail->Port = 587; // Port SMTP pour TLS

        // Destinataires
        $mail->setFrom($email, $nom); // Expéditeur
        $mail->addAddress('kil@gmail.com'); // Destinataire

        // Contenu de l'e-mail
        $mail->isHTML(true);
        $mail->Subject = 'Besoin de mes services';
        $mail->Body = nl2br($message); // Convertit les sauts de ligne en <br>

        // Envoyer l'e-mail
        $mail->send();
        echo 'E-mail envoyé avec succès.';
    } catch (Exception $e) {
        echo "L'e-mail n'a pas pu être envoyé. Erreur : {$mail->ErrorInfo}";
    }
}

/**
 * Envoie un e-mail en utilisant la fonction native mail() de PHP.
 *
 * @param string $msg Le message à envoyer.
 * @param string $nm  Le nom de l'expéditeur.
 * @param string $em  L'adresse e-mail de l'expéditeur.
 * @return void
 */
function process_mail1($msg, $nm, $em)
{
    $to = "kilingm19@gmail.com"; // Adresse e-mail du destinataire
    $subject = "Besoin d'aide"; // Sujet de l'e-mail
    $message = nl2br($msg); // Convertit les sauts de ligne en <br>
    $headers = "From: $em\r\n"; // En-têtes de l'e-mail
    $headers .= "Reply-To: $em\r\n"; // Adresse de réponse
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n"; // Format HTML

    // Envoyer l'e-mail
    if (mail($to, $subject, $message, $headers)) {
        echo "E-mail envoyé avec succès.";
    } else {
        echo "Échec de l'envoi de l'e-mail.";
    }
}
?>