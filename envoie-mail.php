<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $subject = "Nouveau message de contact";
    $body = "Nom: $name\n\nEmail: $email\n\nTéléphone: $phone\n\nMessage:\n$message";

    $to = "adrien.guertin16@gmail.com";
    $headers = "From: $email";
    if (mail($to, $subject, $body, $headers)) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Une erreur s'est produite lors de l'envoi de votre message. Veuillez réessayer plus tard.";
    }

} else {
    echo "Tous les champs du formulaire sont requis.";
}
?>
