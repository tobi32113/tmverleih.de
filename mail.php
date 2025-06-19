<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Pfad zur PHPMailer-Bibliothek anpassen
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    // SMTP konfigurieren
    $mail->isSMTP();
    $mail->Host       = 'smtp.strato.de';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'anfrage@tmverleih.de';
    $mail->Password   = 'Sterntaler1996!';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    // Absender und Empfänger
    $mail->setFrom('anfrage@tmverleih.de', 'Website-Anfrage');
    $mail->addAddress('info@tmverleih.de'); // Deine Empfangsadresse

    // Inhalt
    $mail->isHTML(true);
    $mail->Subject = 'Neue Anfrage von der Website';
    $mail->Body    = 'Name: ' . $_POST['name'] . '<br>Email: ' . $_POST['email'] . '<br>Nachricht:<br>' . nl2br($_POST['nachricht']);

    $mail->send();
    echo 'Nachricht erfolgreich gesendet.';
} catch (Exception $e) {
    echo "Fehler beim Senden: {$mail->ErrorInfo}";
}
?>
