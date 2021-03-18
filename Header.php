<header>
<?php session_start ();?>
<div class="Head">
    
    <div class="Logo"><a href="PageAccueil.php"><img src="/GerardRadeCinevent/images/logo.png"></a></div>
    <div class="HorsLogo">
        <div class="Bouton">
        <ul>

        <?php if (isset($_SESSION['email']))
        {?>
            <li class="Boutton_Menu"><a href="script/deconnexion.php">Deconnexion</a></li>
        <?php
        }
        else
        {
        ?>
            <li class="Boutton_Menu"><a href="PageConnexion.php">Connexion</a></li>
        <?php
        }
        ?>

          <li class="Boutton_Menu"><a href="PageContact.php">Contact</a></li>
            <li class="Boutton_Menu"><a href="PageAPropos.php">a propos</a></li>
            <li class="Boutton_Recherche"><img src="/GerardRadeCinevent/images/loupe.png"></li>
            <li class="Barre_Recherche"><input type="search" ></li>
        </ul>
    </div>

        <div>
            <div class="BarreRouge"></div>
            <div class="BarreVide"></div>
        </div>
    </div>
</div>

</header>