<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Ici, vous pouvez écrire le code pour enregistrer ces données ou les envoyer par email, etc.
    // Par exemple, pour envoyer un email :
    $to = 'alaehaddad205@gmail.com'; // Remplacez par votre adresse email
    $subject = 'Nouveau message du formulaire de contact';
    $headers = "From: " . $email;
    mail($to, $subject, $message, $headers);
    
    // Redirection vers une page de remerciement ou retour au formulaire avec un message de succès
    header('Location: index.html'); // Remplacez par la page de votre choix
}
?>
