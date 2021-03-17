
<header>
<!--<?php //session_start ();?>
    <ul class="container">
    <li class="Fl"><a href="PageAccueil.php"><img src="/Cinevent/images/logo.png"></a></li>
        <?php if (isset($_SESSION['email']))
        {?>

            
            <li><a class="Boutton_Menu" href="script/deconnexion.php">Deconnexion</a></li>
            <li><a class="Boutton_Menu" href="PagePanier.php">Panier</a></li>
        
        <?php
        }
        else
        {
            ?>

            
                  <li><a class="Boutton_Menu" href="PageConnexion.php">Connexion</a></li>
        <?php
    }
    ?>

        <li><a class="Boutton_Menu" href="PageContact.php">Contact</a></li>
        <li><a class="Boutton_Menu" href="PageAPropos.php">a propos</a></li>

        <li><input type="search" id="site-search" name="q" aria-label="Search through site content"><a class="Boutton_Menu">Search</a></li>
    </ul>
</header>-->


<header>
<?php session_start ();?>
<div class="Head">
    
    <div class="Logo"><a href="PageAccueil.php"><img src="/GerardRadeCinevent/images/logo.png"></a></div>
    <div class="HorsLogo">
        <div class="Bouton">
        <ul>
            <li class="Boutton_Menu"><a href="PageContact.php">Contact</a></li>
            <li class="Boutton_Menu"><a href="PageAPropos.php">a propos</a></li>
            <!--<li><img src="/GerardRadeCinevent/images/loupe.png"></li>-->
            <li><input type="search"></li>
        </ul>
    </div>

        <div>
            <div class="BarreRouge"></div>
            <div class="BarreVide"></div>
        </div>
    </div>
</div>

</header>