<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>CinéVent - Vente en ligne de film</title>
    <link rel="stylesheet" href="style.css">


</head>

<body>
    <?php include 'Header.php' ?>


    <section class="container PageContact">
        <div class="box">
            <h1>Comment nous contacter</h1>
            <!--pas trop possible car on ne peut pas stocker les donner reçue -->
            <form action="pastroppossible" method="post">
                <div>
                    <label for="name">Nom :</label>
                    <input type="text" id="name" name="nom" class="input">
                </div>
                <div>
                    <label for="mail">e-mail :</label>
                    <input type="email" id="mail" name="e-mail" class="input">
                </div>
                <div>
                    <label for="msg">Message :</label>
                    <textarea class="input" id="msg" name="message"></textarea>
                </div>
                <div class="test">
                    <!--bouton inutilisable sans Javascript -->
                    <button class="button" type="submit" disabled>Envoyer</button>
                    <button class="button"type="reset">Effacer</button>
                </div>
            </form>
            <ul>
                <div>
                    <li>
                        <img src="/Images/telephone.png">
                    </li>
                    <li>
                        <H2>telephone</H2>
                        <p>Gaetan GERARD: <a href="tel:+33781597290">07.81.59.72.90</a></p>
                        <p>Théo MANCUSO: <a href="tel:+33784916001">07.84.91.60.01</a></p>
                    </li>
                </div>

                <div class="Contact">
                    <li><img src="/Images/emailadresse.png"></li>
                    <li>

                        <H2>adresse e-mail</H2>
                        <p><a href="mailto:gaetangerard@hotmail.fr">gaetangerard@hotmail.fr</a></p>
                        <p><a href="mailto:theo1.mancuso@gmail.com">theo1.mancuso@gmail.com</a></p>

                    </li>
                </div>
            </ul>
        </div>
    </section>

</body>



</html>