<div class="Connexion">
    <form action="fct.php" method="POST" name="Connexion1">
        <h2><?php echo $Connexion ?></h2>
        <div>
            <input type="email" id="email" name="email" class="Saisie" placeholder="E-mail" >
        </div>

        <div>
            <Input type="password" id="motDePasse" name="motDePasse" class="Saisie" placeholder="Mot de passe" > 
        </div><br>
        <div>
            <input type="submit" name="connexion" value="Connexion" class="Bouton_Menu" /><br>
            <a href="index.php?srv=5">Inscription</a>
        </div>
    </form>
</div>