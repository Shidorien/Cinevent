<div class="footer">
    <div class="droite">
        <div class="Social">
            <a href="#"><img src="/GerardRadeCinevent/data/images/facebook.png"></a>
            <a href="#"><img src="/GerardRadeCinevent/data/images/twitter.png"></a>
            <a href="#"><img src="/GerardRadeCinevent/data/images/instagram.png"></a>
        </div>
        <div class="Logo"></div>
    </div>
    <div class="gauche">
        <div>
            <div class="BarreVide">
                <div class="BarreRouge"></div>
            </div>
        </div>
        
    </div>

</div>
<div class="Info">
    <div>
    <table classe="Aide">
    <tr><th><?php echo $Aide ?></th></tr>
    <tr><th><hr></th></tr>
    <tr><td><a href="#"><?php echo $Commandes ?></a></td></tr>
    <tr><td><a href="#"><?php echo $Livraison ?></a></td></tr>
    <tr><td><a href="#"><?php echo $Retour ?></a></td></tr>
    <tr><td><a href="#"><?php echo $FAQ ?></a></td></tr>
    <tr><td><a href="#"><?php echo $ContactSupport ?></a></td></tr>
    </table>

    <table classe="Coordonnees">
    <tr><th><?php echo $Coordonnees ?></th></tr>
    <tr><th><hr></th></tr>
    <tr><td>22 rue du Cinema</td></tr>
    <tr><td>54000, NANCY</td></tr>
    <tr><td>06.32.16.XX.XX</td></tr>
    <tr><td>Contact@Cinevent.net</td></tr>
    </table>

    <table classe="Genre">
    <tr><th><?php echo $Genre ?></th></tr>
    <tr><th><hr></th></tr>
    <?php
    $requete ='SELECT GENRE_Lib FROM genre where LAN_Id="'.$Langue.'"';
    $listGenre=requete($requete);
    while($Genre =$listGenre->fetch(PDO::FETCH_NUM))
            {
                echo "<tr><td><a href='#'>".$Genre[0]."</a></td></tr>";
            }?>
    </table>
<div>
    <div class="Logo"><a href="PageAccueil.php"><img src="/GerardRadeCinevent/data/images/logo.png"></a></div>
    
</div>