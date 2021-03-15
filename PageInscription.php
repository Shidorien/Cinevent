<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>CinéVent - Vente en ligne de film</title>
    <link rel="stylesheet" href="style.css">
    <script src="Script/script.js" type="text/javascript"></script>


</head>

<body>
<?php include 'Header.php' ?>


<section class="container PageInscription">
    <div class="box">
        <div class="fondBlanc">
            <div class="inscription">
                <form action = "Script/Inscription.php"  method="get" name="inscription1">
                    <div>
                        <label for="nom">Nom :*</label>
                        <label>Indiquez votre Nom.</label>
                        <input type="text" id="name" name="nom" class="input">
                    </div>
                    <div>
                            <label for="pnom">Prénom :</label>
                            <input type="text" id="pname" name="pnom" class="input">
                    </div>
                    <div>
                            <label for="Date de naissance">Date de naissance :*</label>
                            <label>Indiquez votre date de naissance.</label>
                            <input type="date" id="dateNais" name="dateNais" class="input">
                    </div>

                    <div>
                        <label for="mail">e-mail :*</label>
                        <label>Indiquez votre e-mail.</label>
                        <input type="email" id="email" name="email" class="input">
                    </div>

                    <div>
                        <label for="password">mot de passe :*</label>
                        <label>Indiquez votre mot de passe</label>
                        <Input type="password" id="motDePasse" name="motDePasse" class="input"> <br>
                    </div>
                    <div>
                            <label for="password">confirmer le mot de passe :*</label>
                            <label>Les mots de passe ne correspondent pas</label>
                            <Input type="password" id="verifMotDePasse" name="verifMotDePasse" class="input"> <br>
                        </div>
                        <input class="button" onclick="verif(this.form)" type="button" value="Valider">
            </div>
            </form>
        </div>
    </section>

</body>



</html>