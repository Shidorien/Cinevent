<?php
/*
Page: connexion.php
*/
session_start(); // � mettre tout en haut du fichier .php, cette fonction propre � PHP servira � maintenir la $_SESSION
if(isset($_POST['connexion'])) { 
    if(empty($_POST['email'])) {
        echo "Le champ email est vide.";
    } else {
        // on v�rifie maintenant si le champ "Mot de passe" n'est pas vide"
        if(empty($_POST['motDePasse'])) {
            echo "Le champ Mot de passe est vide.";
        } else {
            // les champs sont bien post� et pas vide, on s�curise les donn�es entr�es par le membre:
            $email = htmlentities($_POST['email'], ENT_QUOTES, "ISO-8859-1"); // le htmlentities() passera les guillemets en entit�s HTML, ce qui emp�chera les injections SQL
            $MotDePasse = htmlentities($_POST['motDePasse'], ENT_QUOTES, "ISO-8859-1");
            //on se connecte � la base de donn�es:
            $mysqli = mysqli_connect("127.0.0.1", "root", "", "gerard_mancuso_cinevent_bd");
            //on v�rifie que la connexion s'effectue correctement:
            if(!$mysqli){
                echo "Erreur de connexion � la base de donn�es.";
            } else {
                // on fait maintenant la requ�te dans la base de donn�es pour rechercher si ces donn�es existe et correspondent:
                $Requete = mysqli_query($mysqli,"SELECT * FROM utilisateur WHERE mail  = '".$email."' AND mdp = '".$MotDePasse."'");//si vous avez enregistr� le mot de passe en md5() il vous suffira de faire la v�rification en mettant mdp = '".md5($MotDePasse)."' au lieu de mdp = '".$MotDePasse."'
                // si il y a un r�sultat, mysqli_num_rows() nous donnera alors 1
                // si mysqli_num_rows() retourne 0 c'est qu'il a trouv� aucun r�sultat
                if(mysqli_num_rows($Requete) == 0) {
                    echo "Le pseudo ou le mot de passe est incorrect, le compte n'a pas �t� trouv�.";
                } else {
                    // on ouvre la session avec $_SESSION:
                    $_SESSION['email'] = $email; // la session peut �tre appel�e diff�remment et son contenu aussi peut �tre autre chose que le pseudo
                    header("Location: http://localhost/PageAccueil.php");
                }
            }
        }
    }
}
?>