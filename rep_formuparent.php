<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- ce fichier concerne la partie logique du formulaire de soucis -->
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $parent= htmlspecialchars($_POST["parent"]);
    $enfant = htmlspecialchars($_POST["nom_enfant"]);
    $classe = htmlspecialchars($_POST["classe"]);
    $email = htmlspecialchars($_POST["email"]);
    $objet = htmlspecialchars($_POST["objet"]);
    $message = htmlspecialchars($_POST["message"]);
    $date = date("d-m-y H:i:s");

    $ligne = "Parent : $parent <hr> 
            Enfant : $enfant<hr>
            Classe : $classe<hr>
            Email : $email<hr> 
            Objet : $objet <hr>
            Message : $message<hr>
            Date et heure d'envoi de votre message : $date\n";

    // a l'interieur de ce variable on a stocke le fichier txt conenant les info du formulaire parent
    $fichier = "reponse.txt";

    // On ajoute le message à la fin du fichier
    file_put_contents($fichier, $ligne, FILE_APPEND);

    echo "<p>Merci, votre message a été enregistré.</p>";
} else {
    echo "<p>Erreur : méthode non autorisée.</p>";
}
?>
    
</body>
</html>