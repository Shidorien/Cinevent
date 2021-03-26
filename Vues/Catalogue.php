<form id='panier' action='' name='panier' method='POST'>
    
    <?php
            $requete ="SELECT TITRE_Lib,RES_Txt, FILM_Prix, FILM_Couverture FROM titre,resume,film Where film.FILM_Id = titre.FILM_ID AND titre.LAN_Id='".$Langue."' AND film.FILM_Id = resume.FILM_Id AND resume.LAN_Id='".$Langue."'";
            $listfilm=requete($requete);
            
        if ($listfilm) {
                print '<section class="PageAccueil">';
                $k=1;
                while($film =$listfilm->fetch(PDO::FETCH_NUM))
                {
                    if (isset($_POST["ajpanier".$k]))
                        {
                            $req="insert into panier values(NULL,".$k.",5,'".$_SESSION['email']."');";
                            $rs=requete($req);
                        }
                        print '
                            <div class="film"><img src="/GerardRadeCinevent/Data/Images/'.$Langue.'/'.$film[3].'">
                                    
                            <span>
                                <h1>'.$film[0].'</h1> <!-- titre -->
                                <hr>
                                <P>'.$film[1].'</p> <!-- resumer -->
                                <hr>';
                                if (!empty($_SESSION['email']))
                                {
                                    print
                                        '<div class="bouton+prix">
                                        <h2 class="prix">'.$film[2].'€</h2> <!-- prix -->
                                        <button class="bouton2" type="submit" name="ajpanier'.$k.'" >'.$k.'</button>; 
                                    </div>';
                                        $k++;
                                }
                                print  
                                    '</span>
                                    </div> 
                                ';
                }
                print '</section>';
            }
        else 
{
            print "Ca marche pas";
        }
        echo"</form>";
    ?>