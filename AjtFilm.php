<?php 
    if(isset($_POST["send"]))
    {
    $Titre=$_POST["Titre"];
    $Resume=$_POST["Resume"];

    }
    
?>

test

<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>CinéVent - Ajouter un film</title>
        <!-- <link rel="stylesheet" href="style.css"> -->
    </head>

    <body>
        <!-- <?php include 'Header.php' ?> -->
        <?php include 'Script/Fonction.php' ?>


        <b2>Ajouter un film</b2>

        <form id='session' action='' name='ajout_film' method='POST'>
            <input type="button" value="français" id="FR" class="Bouton_Onglet"><input type="button" value="anglais" id="EN" class="Bouton_Onglet">

            <p>Couverture (jpg) : </p><input type="file" accept="image/jpg">

            <p>%Titre% : </p><input type="text" class="Txt_Moyen" name="Titre">
            <p>%Résume% : </p><input type="text" class="Txt_paragraphe" name="Resume">
            <p>%Genre% : </p> <!-- généré une list de tout les different genre en check bouton--> <input href="#" type="button" value="+" id="Aj_Genre" class="Bouton_Ajouter" onclick="">
            <p>%Nationalite% : </p> <!-- généré une list de tout les differente nationalite en check bouton--> <input type="button" value="+" id="Aj_Natio" class="Bouton_Ajouter" onclick="">

            <p>Equipe de tournage :</p>
            <!-- généré une list de tout les different role avec leur liste de personnel-->

            <input type="submit" value="Envoyer" name="send" class="Bouton_Menu">
        </form>
    </body>
</html>