<?PHP
function connectionBdd()
{
	$host='127.0.0.1';
	$base='gerard_rade_cinevent';
	$dsn="mysql:host=".$host.";dbname=".$base;
	$user='root';
	$password='';
	try
	{
		$bdd = new PDO($dsn,$user,$password);
		$bdd -> exec("set names utf8");
	} catch (Exception $e) {
        die('Connexion à la base de données échoué : ' . $e->getMessage());
    }
	
	return ($bdd);
}
function requete($req) { 
  $bdd=connectionBdd();
  $rs=false;		
	  
	  $rs = $bdd->query($req);
      if (!$rs) {
        ecrire_log("erreur SQL :".$bdd->errorInfo()."\n".$req."\n",__FILE__);
		echo "erreur Database";

      }
 return ($rs);
}


function affiche_Catalogue()
{

$requete = "SELECT TITRE_Lib,RES_Txt, FILM_Prix, FILM_Couverture
FROM titre,resume,film
Where film.FILM_Id = titre.FILM_ID
AND film.FILM_Id = resume.FILM_Id";
}


function ecrire_log ($msg,$fichier) {
    //$filename=$_SERVER["DOCUMENT_ROOT"].'/logs/erreur_api.log';
	$filename='logs/erreur_api.log';
	
	$somecontent = date("d-m-y h:i")." : fichier : ".$fichier." : ".$msg;
	
	// Assurons nous que le fichier est accessible en écriture
	if (is_writable($filename)) {
    if (!$handle = fopen($filename, 'a')) {
	    echo "Erreur ouverture fichier";
		//echo "Impossible d'ouvrir le fichier de logs ($filename)<br/>"; // Modif LP le 26-04-2013
		  exit;
	  }
		// Ecrivons quelque chose dans notre fichier.
		if (fwrite($handle, $somecontent) == FALSE) {
		  //echo "Impossible d'écrire dans le fichier de logs ($filename)<br/>";
		  echo "Impossible d'écrire dans le fichier de logs <br/>";
		  
		  exit;
		}
		// echo "Un message a été reporté dans le fichier de log ($filename). <br/>";// Modif LP le 26-04-2013
		echo "Un message a ete reporte dans le fichier de log. <br/>";
		
		fclose($handle);
		} else {
		  // echo "Le fichier $filename n'est pas accessible en écriture.<br/>"; // Modif LP le 26-04-2013
		  echo "Le fichier de log n'est pas accessible en écriture.<br/>";
		  
		}
}