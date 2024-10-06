<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Destinataire
    $to = 'moisesumah@gmail.com';
    
    // Sujet du mail
    $subject = 'Nouveau message de votre site web';

    // Contenu du mail
    $body = "Nom: $name\nEmail: $email\n\nMessage:\n$message";

    // Headers
    $headers = "From: $email";

    // Envoi de l'email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message envoyé avec succès.";
    } else {
        echo "Échec de l'envoi du message.";
    }
}
?>
