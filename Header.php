
<header>
<?php session_start ();?>
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
</header>


