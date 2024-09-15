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
$listfilm=requete($requete);
return $listfilm;
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
  		$url="Vues/".$row[0];
		
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

function listGenre()
{
	include getLan();
	$requete ='SELECT GENRE_Lib FROM genre where LAN_Id="'.$Langue.'"';
    return requete($requete);

}

function const_menu($id_profil) {
	include getLan();
	$req = "SELECT service_lib.SERV_Lib, acceder.idService FROM service_lib, acceder, service WHERE LAN_Id='".$Langue."' AND service_lib.SERV_id = service.serv_id AND service.serv_id = acceder.idService AND acceder.idProfil=".$id_profil;
	$rs = requete($req);
	$i=0;
	if ($rs) {
		while ($enreg=$rs->fetch(PDO::FETCH_NUM)) { 
		  echo "<li class='Bouton_Menu'><a href='index.php?srv=".$enreg[1]."'>".$enreg[0]."</a></li>";
		}
		
	}
}

function deconnexion(){
	session_unset ();
session_destroy ();
header("Location: http://localhost/GerardRadeCinevent/index.php");
}

function connexion($email,$motDePasse)
{
	
}
// A TRANSFORMER EN FUNCTION !!!!!



if(isset($_POST['connexion'])) { 
	session_start();
    if(empty($_POST['email'])) {
        echo "Le champ email est vide.";
    } else {
        if(empty($_POST['motDePasse'])) {
            echo "Le champ Mot de passe est vide.";
        } else {
            $email = htmlentities($_POST['email'], ENT_QUOTES, "ISO-8859-1"); // le htmlentities() passera les guillemets en entités HTML, ce qui empéchera les injections SQL
            $MotDePasse = htmlentities($_POST['motDePasse'], ENT_QUOTES, "ISO-8859-1");
                $rs = requete("SELECT * FROM utilisateur WHERE USER_Mail = '".$email."' AND USER_MotDePasse = '".$MotDePasse."'");
                if($rs->rowCount() == 0) {
                    echo "Le pseudo ou le mot de passe est incorrect, le compte n'a pas été trouvé.";
                } else {
                    $_SESSION['email'] = $email;
                    header("Location: http://localhost/GerardRadeCinevent/index.php");
                }
            }
        }
    }
//------------------------------------------------

	function inscription($email,$nom,$pnom,$dateNais,$motDePasse)
	{
    $rs = requete("INSERT into utilisateur values ('(SELECT MAX( `USER_Id` )+1 FROM utilisateur)','".$nom."','".$pnom."','".$email."','".$dateNais."','".$motDePasse."','2')");
	header("Location: http://localhost/GerardRadeCinevent/index.php?srv=3");
    }
	




	
//panier

function creationPanier(){
    if (!isset($_SESSION['panier'])){
       $_SESSION['panier']=array();
       $_SESSION['panier']['IdFilm'] = array();
       $_SESSION['panier']['libelleFilm'] = array();
       $_SESSION['panier']['qteFilm'] = array();
       $_SESSION['panier']['prixFilm'] = array();
       $_SESSION['panier']['verrou'] = false; /*empeche les modification du panier si True */
    }
    return true;
 }

 function isVerrouille(){
     return $_SESSION['panier']['verrou'];
 }

 function ajouterArticle($IdFilm,$libelleFilm,$qteFilm,$prixFilm){

    //Si le panier existe
    if (creationPanier() && !isVerrouille())
    {
       //Si le produit existe déjà on ajoute seulement la quantité
       $positionFilm = array_search($IdFilm,  $_SESSION['panier']['IdFilm']);
    
       if ($positionFilm !== false)
       {
          $_SESSION['panier']['qteFilm'][$positionFilm] += $qteFilm ;
       }
       else
       {
          //Sinon on ajoute le produit
          array_push( $_SESSION['panier']['IdFilm'],$IdFilm);
          array_push( $_SESSION['panier']['libelleFilm'],$libelleFilm);
          array_push( $_SESSION['panier']['qteFilm'],$qteFilm);
          array_push( $_SESSION['panier']['prixFilm'],$prixFilm);
       }
    }
    else
    echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}

function supprimerArticle($IdFilm){
    //Si le panier existe
    if (creationPanier() && !isVerrouille())
    {
       //Nous allons passer par un panier temporaire
       $tmp=array();
       $tmp['IdFilm'] = array();
       $tmp['libelleFilm'] = array();
       $tmp['qteFilm'] = array();
       $tmp['prixFilm'] = array();
       $tmp['verrou'] = $_SESSION['panier']['verrou'];
 
       for($i = 0; $i < count($_SESSION['panier']['IdFilm']); $i++)
       {
          if ($_SESSION['panier']['IdFilm'][$i] !== $IdFilm)
          {
             array_push( $tmp['IdFilm'],$_SESSION['panier']['IdFilm'][$i]);
             array_push( $tmp['libelleFilm'],$_SESSION['panier']['libelleFilm'][$i]);
             array_push( $tmp['qteFilm'],$_SESSION['panier']['qteFilm'][$i]);
             array_push( $tmp['prixFilm'],$_SESSION['panier']['prixFilm'][$i]);
          }
 
       }
       //On remplace le panier en session par notre panier temporaire à jour
       $_SESSION['panier'] =  $tmp;
       //On efface notre panier temporaire
       unset($tmp);
    }
    else
    echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}

 function modifierQTeArticle($IdProduit,$qteProduit){
    //Si le panier existe
    if (creationPanier() && !isVerrouille())
    {
       //Si la quantité est positive on modifie sinon on supprime l'article
       if ($qteProduit > 0)
       {
          //Recherche du produit dans le panier
          $positionProduit = array_search($IdProduit,  $_SESSION['panier']['IdProduit']);
 
          if ($positionProduit !== false)
          {
             $_SESSION['panier']['qteProduit'][$positionProduit] = $qteProduit ;
          }
       }
       else
       supprimerArticle($IdProduit);
    }
    else
    echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}

function compterArticles(){
   if (isset($_SESSION['panier']))
   return count($_SESSION['panier']['IdProduit']);
   else
   return 0;
}

function MontantGlobal(){
    $total=0;
    for($i = 0; $i < count($_SESSION['panier']['IdProduit']); $i++)
    {
       $total += $_SESSION['panier']['qteProduit'][$i] * $_SESSION['panier']['prixProduit'][$i];
    }
    return $total;
}