<head>
    <meta charset="UTF-8">
</head>

<?php
$connexion = mysql_connect("127.0.0.1", "root", "");
if ($connexion)
    {print "Connexion réussie <br>";
    $requete ='INSERT INTO utilisateur (mail,nom,prenom,dateNaiss,mdp) VALUES("'.$_REQUEST["email"].'","'.$_REQUEST["nom"].'","'.$_REQUEST["pnom"].'","'.$_REQUEST["dateNais"].'","'.$_REQUEST["motDePasse"].'")';
    mysql_select_db ("gerard_mancuso_cinevent_bd", $connexion);
    $resultatRequete = mysql_query( $requete, $connexion);
    if
        ($resultatRequete) print "Votre saisie a été prise en compte ";
    else 
        print "Impossible d'envoyer les donnees";
    }
else print "Echec de la connexion";
?>