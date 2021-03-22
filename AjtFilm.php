<?php 
    if(isset($_POST["send"]))
    {
    $Titre=$_POST["Titre"];
    $Resume=$_POST["Resume"];

    }
    
?>



<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>CinéVent - Ajouter un film</title>
    </head>

    <body>
        <?php include 'Header.php' ?>


        <section class="AjtFilm container">
        <div class="box">

        <form id='session' action='' name='ajout_film' method='POST'>
            <input type="button" value="français" id="FR" class="Bouton_Onglet"><input type="button" value="anglais" id="EN" class="Bouton_Onglet">

            <h2>Couverture* (jpg) : </h2><input type="file" accept=".jpg" name="file">
            <div id="preview-file"></div>

            <h2>Titre* : </h2><input type="text" class="Txt_Moyen" name="Titre">
            <h2>Résume* : </h2><input type="text" class="Txt_paragraphe" name="Resume">
            <h2>Genre : </h2> <!-- généré une list de tout les different genre en check bouton--> <input  type="button" value="+" id="Aj_Genre" class="Bouton_Menu" onclick="">
            <h2>Nationalite : </h2> <!-- généré une list de tout les differente nationalite en check bouton--> <input type="button" value="+" id="Aj_Natio" class="Bouton_Menu" onclick="">

            <h2>Equipe de tournage :</h2>
            <!-- généré une list de tout les different role avec leur liste de personnel-->

            <input type="submit" value="Envoyer" name="send" class="Bouton_Menu">
        </form>
        </div>
        </section>
        <?php include 'Footer.php' ?>
    </body>
</html>