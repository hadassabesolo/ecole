<!--  1ere partie : on va preparé une variable associatif -->
<?php
$communiques = [
                "28 mars 2025"=>"Journée école sans cartable :
                    Le samedi 10 mai 2025, une journée spéciale sans cartable sera organisée autour du thème
                    de l’environnement 'Salongo'. Ateliers, jeux pédagogiques et animations au programme pour 
                    sensibiliser nos élèves à l’écologie.",
                
                "2 avril 2025"=>"Nouveau professeur de sciences  :
                    Bienvenue à M. Bako Thierry, notre nouveau professeur de sciences pour les classes
                     de 2e et 3e. Il succède à Mme Nsimba, partie en congé maternité.",
                
                "5 avril 2025"=>" Réunion de parents (1ère et 2e année) :
                    Une réunion des parents se tiendra le samedi 26 avril à 16h pour les parents 
                    des élèves de 1ère et 2e année. Objectif : faire le point sur les résultats et les 
                    activités du trimestre.",
                
                "29 avril 2025"=> "Résultats du concours interscolaire : 
                    Le Collège Sainte Trinité s’est distingué au concours interscolaire de français.
                     Bravo à nos élèves de 4e année qui ont remporté la 1ère place sur 12 établissements.",
                
                "15 juillet 2025 "=> "Rentrée scolaire 2025-2026:
                    La rentrée des classes est prévue pour le lundi 8 septembre 2025.
                     Tous les élèves sont attendus à 7h30 en tenue réglementaire. Les horaires 
                     détaillés seront affichés dès le 20 août.",
                
];
?>

<!--2eme parti html + script(traitement) -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylisation.css">
    <link rel="stylesheet" href="parents.css">
        
</head>
<body>
     <header>
        <img src="toph/file_000000005974523090ad391b04f0cdc3_conversation_id=67f2ad87-8d28-800b-b157-d53f21741818&message_id=0cb3178b-765f-4d5c-a493-2b21d746b77c.PNG" 
        height="90" width="150">
        <nav>
            <ul>
                <li><a href="Accuel.html">Accueil</a></li>
                <li><a href="A propos.html">A propos</a></li>
                <li><a href="programmes.HTML">Nos programmes</a></li>
                <li><a href="orientation.html">Orientation</a></li>
                <li><a href="espace parent.html">espace parents</a></li>
                <!-- <li><a href="compt.php">&#x1F465;</a></li> -->
                <li><a href="Contact.html">Contact</a></li>
                <li><a href="compt.php"><span style="color: gainsboro; font-size: 20px;">&#x1F465;</span>
                </a></li>
            </ul>
        </nav>
    </header>
    <main>

        <button class="btn"><a href="espace parent.html">← Retour</a></button>
        <h1>Actualités général</h1>

            <?php
            // Vérifie si le tableau associatif  contient au moins un communiqué, si oui on entre dans la condition 
            if (!empty($communiques)) {
                // on parcour chaque ligne du tableau , mis dans un div(mini caisse)
                foreach ($communiques as $date => $message) {
                    echo '<div>';
                    echo '<p class="date">' . htmlspecialchars($date) . '</p>';
                    echo '<p>' . htmlspecialchars($message) . '</p>';
                    echo '</div>';
                }
            } else {
                echo "<p>Aucun communiqué pour le moment.</p>";
            }
            ?>
        
        </main>
        <footer>
        <section id="fin">
            <!-- IL FAUT METTRE DES ICONES VOIR PHOTO -->
            <div class="contact">
                <h3>Nom de l'etablissement : collège sainte trinité </h3>
                <p>Av\ de l'excellence Q\MBIZA Pompage C\NGALIEMA</p>
                <p>telephone:+243836018034</p>
                <p><a href="estherbesolo@05.com">contact@sainte trinité.fr</a></p>
                <p>Horaires d'ouverture:lundi-vendredi,07h30-16h30</p>
            </div>
            <div class="suivie">    
                    <h4>Suivez-nous sur les reseaux sociaux</h4>
                    <p>facebook | instagram | Twitter</p>
                    <h4>Liens rapides:</h4>
                    <ul>
                        <li><a href="Accuel.html">Accueil</a></li>
                        <li><a href="A propos.html">A propos</a></li>
                        <li><a href="programmes.HTML">Nos programmes</a></li>
                        <li><a href="orientation.html">Orientation</a></li>
                        <li><a href="Contact.html">Contact</a></li>
                        <li><a href="espace parents.html">espace parents</a></p>
                    </ul>
            </div>
            <div class="mention">
                <ul>      
                    <strong>Mentions légales et politique de confidentialité</strong><br>
                    <li><a href="Mentions légales">Mensions légales</a></li>
                    <li><a href="politique de confidentialité">politique de confidentialité</a></li>
                </ul>
            </div>    
                

                <br><strong>credits</strong><br>
                <p>© 2025 Collège Sainte Trinité. Tous droits réservés</p>
                <p>conception et réalisation: Besolo hadassa esther</p>
        </section>        
    </footer>    

    






















<!-- </head>
<body>
    
</body>
</html> -->