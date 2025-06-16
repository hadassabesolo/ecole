<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        // on inclut la connexion
        include("connexion.php");
        // verifi si la connexion a ressit
//         if ($connexion->connect_error) {
//     die("Erreur de connexion : " . $connexion->connect_error);
// }

// on verifi si le formulaire a ete envoyé , si oui le recupere
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST['noms']);
    $message = htmlspecialchars($_POST['message']);

    // on verifi si le nom et message ont ete entré, si oui on l'insert dans la bd
    if (!empty($nom) && !empty($message)) {
        $stmt = $connexion->prepare("INSERT INTO commentaireparent (noms, messages) VALUES (?, ?)");
        $stmt->execute([$nom, $message]);
        // $stmt->close();
        header("location: commentaire.php");
    }
}
?>
    


    
</body>
</html>