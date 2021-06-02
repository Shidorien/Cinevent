<?php

    echo '<section class="PageAccueil">';
	$req="select * from panier";
    $rs=requete($req);
 
   echo" <div class='tabpanier'>";
	echo"<table>";
   echo"<tr>";
  echo"<th>ARTICLES</th>";
        echo"<th>QUANTITE</th>";
         echo"<th>PRIX</th>";
        echo"</tr>";
   while($panier= $rs->fetch(PDO::FETCH_NUM))
   {
        $reqtitre="select TITRE_Lib from film,titre where film.FILM_Id=titre.FILM_Id and film.FILM_Id=".$panier[1]."";
        $rstitre=requete($reqtitre);
        $titre=$rstitre->fetch(PDO::FETCH_NUM);

        echo"<td>".$titre[0]."</td>";
        echo"<td>".$panier[2]."</td>";
        echo"<td>".$panier[3]."</td>";
        echo"</tr>";
   }
 echo"</table>";
 echo"</div>";
 echo"</section>";		
?>