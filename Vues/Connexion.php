<div class="Connexion">
    <form action="fct.php" method="POST" name="Connexion1">
        <h2><?php $Connexion ?></h2>
        <div>
            <label for="mail">e-mail</label><br>
            <input type="email" id="email" name="email" class="Saisie">
        </div>

        <div>
            <label for="password">mot de passe</label><br>
            <Input type="password" id="motDePasse" name="motDePasse" class="Saisie"> <br>
        </div>
        <div>
            <input type="submit" name="connexion" value="Connexion" class="Bouton_Menu" /><br>
            <a href="index.php?srv=5">Inscription</a>
        </div>
    </form>
</div>