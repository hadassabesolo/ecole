<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylisation.css">
    <link rel="stylesheet" href="deco.css">
    <style>
            body {
                font-family: Arial, sans-serif;
                margin: 30px;
                background-color:slategray;
                background-image: url();
                
                
            }
            header{

                background-color: #004080;
                background-color: red;

                color: white;
                padding: 10px 50px;
                display: flex;/*pour bien organiser le titre et le menu(separer le titre du menu)*/
                justify-content:space-between; /*pour placer le menu a droite*/
                align-items: center; /* placer les menus au centre*/
                position: sticky;
                top: 0;


            }

            h2{
                color: color: #003366;

                text-align:center;
            }

            form {
                background-color: black;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 5px #ccc;
                margin-bottom: 30px;
            
                width:89%;
                max-width:1500px;
                margin: 20px auto;
            }
            label{
                color:white;
            }

            input[type="text"], textarea {
                width: 100%;
                padding: 10px;
                margin-top: 5px;
                margin-bottom: 15px;
                border-radius: 5px;
                border: 1px solid #ccc;
            }

            input[type="submit"] {
                padding: 10px 20px;
                background-color: #003366;
                color: white;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }

            .avis {
                background-color: #fff;
                padding: 15px;
                margin-bottom: 15px;
                border-radius:20px 
                width:60%;
                max-width:1100px;
                margin: 20px auto;
                border-radius:10px;
                background-color:black;
                
            }
            .date{
                text-align:right;
                color: #888888;
                font-size:0.9rem;
                margin-top:10px
            }
            .message{
                color:#fff;
            }
            .nom{
                color: skyblue;
            }
    </style>
</head>
<body>
    
    <!-- <main>/ -->
    <h2>vos avis et sujections concernant <br>
         tous ce qui est en rapport avec l'éducation de 
        vos enfants
    </h2>
    <!-- formulaire commentaire -->

    <form method="post" action="stock_commentaire.php">
        <label for="nom">Nom :</label>
        <input type="text" name="noms" id="nom" required><br><br>

        <label for="message">Message :</label>
        <textarea name="message" id="messages" rows="4" required></textarea><br><br>

        <button type="submit">envoyer</button>
    </form><br><br>

    <?php
        include("connexion.php");
    // on fait une requete pour sortir les info qu'on avait entrer dans les formulaire
    $result = $connexion->query("SELECT * FROM commentaireparent ORDER BY date_envoi DESC");
    
    // on fait une boucle pour parcourir ces info et l'afficher

    while ($row = $result->fetch()) {
        echo "<div class='avis'>";
        echo "<p class='nom'>". "<strong>" . htmlspecialchars($row['noms']) . "</strong>: " ;
         echo "<p class='message'>". nl2br(htmlspecialchars($row['messages']))."</p>".
        "<p class='date'>".$row['date_envoi'] . "</p>";
        
        echo "</div>";
    }

    ?>
    <!-- </main> -->
</body>
</html>