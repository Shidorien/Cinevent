<?PHP
if(isset($_POST['LAN'])){if($_POST['LAN'] == "fr"){$_SESSION['LAN'] = "fr";}}
if(isset($_POST['LAN'])){if($_POST['LAN'] == "en"){$_SESSION['LAN'] = "en";}}

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
	$filename='logs/erreur_api.log';
	$somecontent = date("d-m-y h:i")." : fichier : ".$fichier." : ".$msg;
	if (is_writable($filename)) {
    if (!$handle = fopen($filename, 'a')) {
	    echo "Erreur ouverture fichier";
		  exit;
	  }
		if (fwrite($handle, $somecontent) == FALSE) {
		  echo "Impossible d'écrire dans le fichier de logs <br/>";
		  exit;
		}
		echo "Un message a ete reporte dans le fichier de logs. <br/>";
		
		fclose($handle);
		} else {
		  echo "Le fichier de logs n'est pas accessible en écriture.<br/>";
		  
		}
}

function getUrl()
{
	if(isset($_GET["srv"]))
	{
		include getLan();
		$req="select serv_url from service where serv_id=".$_GET["srv"]."";
  		$rs=requete($req);
  		@$row=$rs->fetch(PDO::FETCH_NUM); 
  		$url=$row[0];
		
		  if ($url=='') {
			echo "<div id='msg_erreur'>".$ServiceInconnue."</div>";
		  }
	}
	else
	{
		$url = "Vues/Catalogue.php";

	}
	return $url;

}


function getLan()
{
	if(isset($_SESSION['LAN']))
	{
		if($_SESSION['LAN'] == "en")
		{
			$CLan = "Data/Traduction/EN.php";
		}
		else
		{
			$CLan = "Data/Traduction/FR.php";
		}
	}
	else
	{
		$CLan = "Data/Traduction/FR.php";
	}

	return $CLan;
}
