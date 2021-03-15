<?php
    $connexion = mysql_connect("127.0.0.1", "root", "");
    if ($connexion)
        {$requete ='SELECT articles.* FROM articles';
        mysql_select_db ("clients", $connexion);
        $resultatRequete = mysql_query( $requete, $connexion);
        if
            ($resultatRequete) {
                while($ligneResultat = mysql_fetch_array($resultatRequete))
                print $ligneResultat['nom'];
            }
        else 

            print "Ca marche pas";
        }
    else print "Echec de la connexion";
    
    ?>

