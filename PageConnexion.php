<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>CinéVent - Connexion</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'Header.php' ?>
    <section class="container PageConnexion">
        <div class="box"> <!-- carré blanc -->
            <form action = "script/Connexion.php"  method="POST" name="Connexion1">
                <div>
                    <label for="mail">e-mail :</label>
                    <input type="email" id="email" name="email" class="input">
                </div>

                <div>
                    <label for="password">mot de passe :</label>
                    <Input type="password" id="motDePasse" name="motDePasse" class="input"> <br>
                    <a href=#>Mot de passe oublié.</a>
                </div>
                <ul>
                    <input type="submit" name="connexion" value="Connexion" class="button" />
                    <li><a href="PageInscription.php">Inscription</a></li>
                </ul>
            </form>
        </div>
        
  
</body>



</html