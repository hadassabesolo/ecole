<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylisation.css">
    <link rel="stylesheet" href="deco.css">

    <style>
        body{
        background-image: url(toph/710Jf-qM2bL._AC_UF894\,1000_QL80_.jpg);
        }
        

        form{
        max-width:700px;
        margin: 20px auto;
        padding:20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        background-color: ;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; */
        /* text-align: center;
        margin: auto;
        /* display:flex; */
        justify-content:center;
        }

        form section{
        max-width: 700px;
        margin: 30px auto; /*ramene la section au centre en espacant*/
        padding: 10px;
        background-color: #f4f8ff;
        border: 2px solid #007bff;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /*l'ombrage*/
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}



        /* style particulier */
        input[type="password"], 
        input[type="email"],
        textarea{
        width: 100%; /*pour la largeur de case*/
        padding: 2px; /*pour agrandire l'espace interne de case*/
        box-sizing: border-box; /*pour faire entrer les lignes a l'interieur de case*/
        border: 1px solid #ccc; /*la couleur du bordure*/
        border-radius: 5px;
        font-size: 15px;
    
}

    </style>
</head>
<body>
    <!-- voici les formulaire pour acceder a l'espace parent -->
    
        <form method="POST" action="espace_securisé.php">
            <section>
            <label for="noms_parent">Votre nom</label>
            <input type="text" name="parents" id="parent"><br><br>
            <label for="noms_enfant">nom de l'enfant:</label>
            <input type="text" name="nom_enfant" id="enfant"><br><br>
            <label for="classe_enfant">sa classe</label>
            <input type="text" name="classe" id="classe"><br><br>
            <label>Email :</label>
            <input type="email" name="email" required><br><br>
            <label>Mot de passe :</label>
            <input type="password" name="mot_de_passe" required><br><br>
            </section>

            <button type="submit">Se connecter</button>
        </form>
    
</body>
</html>