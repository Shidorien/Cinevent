<?PHP


function connectionBdd()
{
	$host='127.0.0.1';
	$base='gerard_rade_cinevent_bd';
	$dsn="mysql:host=".$host.";dbname=".$base;
	$user='root';
	$password='';
	
	try
	{
		$bdd = new PDO($dsn, $user, $password);
		$bdd -> exec("set names utf8");
	} catch (Exception $e) {
        die('Connexion à la base de données échoué : ');
    }
	
	return ($bdd);
}