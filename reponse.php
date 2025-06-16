<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylisation.css">
    <link rel="stylesheet" href="deco.css">
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

    <!-- dans ce fichier on a la reponse de la direction -->
    <form action="">
        <h2> Collège sainte trinité : formulaire adresser au parent </h2>
        <section>
        <fieldset>
            <?php
                // on inclut le premier fichier contenant les info du formulaire parent
                include("reponse.txt");
            ?>
            
        </fieldset>
        </section>

        <section>
            <fieldset>
                <h3>Direction :</h3>
                <?php
                    // on inclut le deuxieme fichier txt contenant la reponse de la direction
                    include("direction.txt")
                 ?>
            </fieldset>
        </section>
    </form><br><br>
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
    </main>

    
</body>
</html>