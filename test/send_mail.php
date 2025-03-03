<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $to = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    
    $headers = "From: test@test.com\r\n";
    $headers .= "Reply-To: test@test.com\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

   
    if (mail($to, $subject, $message, $headers)) {
        echo "Email envoyé avec succès à $to";
    } else {
        echo "Une erreur s'est produite lors de l'envoi de l'email.";
    }
} else {
    echo "Méthode non autorisée.";
}
mail($to, "Formulaire de contact", "Pseudo : " . $_POST['pseudo'] . "\nEmail : " . $_POST['email'] . "\nTel : " . $_POST['tel'] . "\nMessage : Pascale" . $_POST['message']);
$to = "cfirote@gmail.com";
?>
