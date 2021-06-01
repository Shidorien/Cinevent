<?php
    if (isset($_POST['nom']) && isset($_POST['pnom']) && isset($_POST['dateNais']) && isset($_POST['email']) && isset($_POST['motDePasse']) && isset($_POST['verifMotDePasse']) )
    {
        inscription($_POST['email'],$_POST['nom'],$_POST['pnom'],$_POST['dateNais'],$_POST['motDePasse']);
    }
?>

<div class="inscription">
<h2>Inscription</h2>
    <form action="#" method="post" name="inscription">
        <div>
            <input type="text" id="name" name="nom" class="Saisie" placeholder="Nom*">
        </div>
        <div>
            <input type="text" id="pname" name="pnom" class="Saisie" placeholder="Prénom">
        </div>
        <div>
            <input type="date" id="dateNais" name="dateNais" class="Saisie" placeholder="Date de naissance*">
        </div>

        <div>
            <input type="email" id="email" name="email" class="Saisie" placeholder="E-mail*">
        </div>

        <div>
            <Input type="password" id="motDePasse" name="motDePasse" class="Saisie" placeholder="mot de passe*"> <br>
        </div>
        <div>
            <Input type="password" id="verifMotDePasse" name="verifMotDePasse" class="Saisie" placeholder="E-confirmer le mot de passe*"> <br>
        </div>
        <input class="Bouton_Menu" onclick="verif(this.form)" type="button" value="Valider">
    </form>
</div>

