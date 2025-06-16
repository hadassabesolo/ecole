
<!-- les variables associatif -->
<?php
$communiques = [
           "08 avril 2025"=> "Résultats scolaires – Semestre2 : Votre enfant a obtenu une moyenne générale de 75% ce trimestre. Félicitations pour ses 
                efforts constants en mathématiques et sciences, où il a progressé de manière remarquable.",
            
            "09 avril 2025"=>"Comportement exemplaire en classe : L’enseignant de français a signalé un comportement très respectueux et une participation
                 active de votre enfant durant les activités en classe cette semaine. Bravo à lui !",

            "21 mai 2025"=>" Projet artistique sélectionné :
                Le dessin de votre enfant a été sélectionné pour représenter la classe lors de l’exposition
                 artistique du collège. Il sera exposé du 15 au 20 mai dans le hall principal.",

            "01 juin 2025"=> "Justification d'absence de votre enfant à la deuxième semestre : 
                L’absence du jeudi 10 avril a bien été enregistrée comme justifiée suite au certificat médical reçu.
            ",

            "15 juin 2025"=>"Participation à une activité parascolaire : 
                Votre enfant participera à un concours de genie en herbe chaque mercredi après-midi à 
                partir du 23 juin. Merci de prévoir une tenue adaptée."

            
            
            

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
        <h1>Actualités de Josue Yave</h1>
        <h3>classe : 5ème scientifique A</h3>

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

    