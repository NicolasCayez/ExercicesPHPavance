<?php
require_once __DIR__ . '/vendor/autoload.php';
include './test_objet.php';


use PHPMailer\PHPMailer\PHPMailer; // On importe la classe tout en haut
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php'; // On charge l'autoloader de composer
$mail = new PHPMailer(true); // Instantiation
// Paramètres du serveur
$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->Debugoutput = 'html';
$mail->Host = '*************';
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
// Informations envoyeur/réceptionneur
$mail->Username = '**********';
$mail->Password = '*************';
$mail->From = 'mailtest@coursadrar.lol';
$mail->FromName = 'Nicolas';
$mail->addAddress('**************');
// Contenu
$mail->isHTML(true); // Permet l'interprétation de l'HTML dans le mail
$mail->CharSet = 'UTF-8';
$mail->Encoding = 'base64';
$mail->Subject = 'teste du mail';
$body = '<p>This is a test message</p>';
$mail->Body = $body;
try {
    // $mail->send(); // réactiver pour relancer des envois de mail
} catch(Exception $e) {
    echo "Erreur: ". $e->getMessage();
}
exit;


?>