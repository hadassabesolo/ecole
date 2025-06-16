<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- cette page est reservé a la connexion de page php vers la base des données -->
     <?php

        $host= "localhost"; // lieu du server 
        $user="root";// nom utilisateur par defaut
        $password="";// mot de passe
        $dbname="ecole";// nom de la base de donnée

        try {
            $connexion= new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $user, $password);

            $connexion->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e){
            die("Erreu de connexion:". $e->getMessage());

        }
     
     ?>
    
</body>
</html>