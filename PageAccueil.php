<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>CinéVent - Vente en ligne de film</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'Header.php' ?>
    
    <?php
    $requete ='SELECT * FROM articles';
    $rs=requete($requete);

	$listefilm = array();
	do
	{
	$film = $rs->fetch(PDO::FETCH_NUM);
	if ($film) 
	{
		$listefilm[] = $film;
	}
	}
	while ($film);


    
    echo "  <form id='panier' action='' name='panier' method='POST'>";
    
            $requete ='SELECT * FROM articles';
            $listfilm=requete($requete);
            
        if ($listfilm) {
                print '<section class="container PageAccueil">';
                $k=1;
                while($film =$listfilm->fetch(PDO::FETCH_NUM))
                {
                    if (isset($_POST["ajpanier".$k]))
                        {
                            $req="insert into panier values(NULL,".$k.",5,'".$_SESSION['email']."');";
                            $rs=requete($req);
                        }
                        print '
                            <div class="film"><img src="/GerardRadeCinevent/Images/FR/'.$film[10].'">
                                    
                            <span>
                                <h1>'.$film[1].'</h1> <!-- titre -->
                                <hr>
                                <P>'.$film[2].'</p> <!-- resumer -->
                                <hr>';
                                if (!empty($_SESSION['email']))
                                {
                                    print
                                        '<div class="bouton+prix">
                                        <h2 class="prix">'.$film[9].'€</h2> <!-- prix -->
                                        <button class="bouton2" type="submit" name="ajpanier'.$k.'" >'.$k.'</button>; 
                                    </div>';
                                        $k++;
                                }
                                print  
                                    '</span>
                                    </div> 
                                ';
                }
                print $k;
                print '</section>';
            }
        else 
{
            print "Ca marche pas";
        }
        echo"</form>";
    ?>
    <?php include 'Footer.php' ?>
</body>



</html>