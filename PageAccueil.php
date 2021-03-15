<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>CinéVent - Vente en ligne de film</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'Header.php' ?>
    <?php include 'Script/Fonction.php' ?>
    <?php

    if (connectionBdd())
        {
            $req = "SELECT TEXTE_Texte , FILM_couverture , FILM_Prix "

        if 
            ($resultatRequete) {
                print '<section class="container PageAccueil">';
                while($ligneResultat = mysql_fetch_array($resultatRequete))
                {
                  print '
                        <div class="film"><img src="/Images/'.$ligneResultat[10].'">
                        
                        <span>
                            <h1>'.$ligneResultat[1].'</h1> <!-- titre -->
                            <hr>
                            <P>'.$ligneResultat[2].'</p> <!-- resumer -->
                            <hr>';
                        if (!empty($_SESSION['email']))
                            {
                                print
                                '<div class="bouton+prix">
                                <h2 class="prix">'.$ligneResultat[9].'€</h2> <!-- prix -->
                                <button class="button" type="button">+</button>
                                
                                </div>';
                            }
                            print
                            
                            '</span>
                        </div> 
                        
                    ';
                }
                print '</section>';
            }
        else 

            print "Ca marche pas";
        }
    else print "Echec de la connexion";
    ?>
    <a href="panier.php?action=ajout&amp;IdFilm='5'&amp;libelleFilm='yes'&amp;qteFilm='5'&amp;prixFilm='12'" onclick="window.open(this.href, '','toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;">Ajouter au panier</a>
</body>



</html>