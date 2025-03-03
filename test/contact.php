<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de contact</title>
    <link rel="stylesheet" href="contact.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.fog.min.js"></script>
    <script src="contact.js"></script>
</head>

<body id="vantajs">

    <h2 class="content">Coordonées</h2>

    <ul>
        <li>Adresse : Rue de Gambetta</li>
        <li><a href="mailto:Noussayba.nh@gmail.com">Email : Noussayba.cv@gmail.com</a></li>
        <li>Tel : 08.12.36.52.98</li>
    </ul>

    <h2>Formulaire de contact</h2>

    <form action="#" method="post">
        M.<input type="radio" name="civilite">
        Mme.<input type="radio" name="civilite"><br>
        <label for="nom">Nom</label> <input id="nom" type="text" placeholder="Nom"><br>
        <label for="prenom">Prénom</label> <input id="prenom" type="text" placeholder="Prénom"><br>
        <label for="message">Message</label> <textarea id="message" placeholder="écrivez votre message"></textarea><br>
        <label for="date">Calendrier</label><input type="date" name="date" id="date"><br>
        <label for="pays">Pays</label>
        <select id="pays" name="country">
            <option>FR</option>
            <option>BL</option>
            <option>AN</option>
        </select><br>
        <input type="checkbox" name="consent">J'accepte la conservation de mes données <br>
        <input type="submit" value="Soumettre">
    </form><br>


    <form action="#" method="post">

        <label for="pseudo">Pseudo</label> <input id="pseudo" type="text" name="pseudo" placeholder="Pseudo"
            autofocus="autofocus"><br>
        <label for="email">E-mail</label> <input id="email" type="text" name="email" placeholder="E-mail"><br>
        <label for="tel">Tel</label> <input id="tel" type="tel" name="tel" pattern="^0[6-7][0-9]{8}$"
            placeholder="Tel"><br>
        <label for="message">Message</label> <textarea id="message" name="message" placeholder="écrivez votre message"
            required="required"></textarea><br>

        <input type="checkbox" name="consent">J'accepte la conservation de mes données <br>
        <button type="submit" value="Soumettre" name="envoie">Envoyer</button>


    </form>

    <?php

    if(isset($_POST["envoie"])){

        if(empty($_POST["pseudo"] || empty($_POST["message"]))){
            echo "Veuillez remplir tous les champs";
            exit;
        }
        $to  = "Noussayba.nh@gmail.com";

        //envoie du mail

        mail($to, "Formulaire du contact" , "Pseudo : ".$_POST["pseudo"] . "\nEmail : " .$_POST["email"] . "\nTel : " .$_POST["tel"] . "\nMessage : " .$_POST["message"]);

        //confirmation de l'envoie

        echo "Votre message a bien été envoyé";
    }
    ?>


    <a class="lien" href="index.html"><b>Retourner vers mon CV</b></a>

    <script>
        VANTA.FOG({
            el: "#vantajs",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00
        })
    </script>



</body>

</html>