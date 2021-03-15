
<header>
<?php session_start ();?>
    <ul class="container">
        <?php if (isset($_SESSION['email']))
        {

            print '<li class="Fl"><a href="PageAccueil.php"><img src="/Images/logo.png"></a></li>
                   <li><a class="button" href="script/deconnexion.php">Deconnexion</a></li>
                   <li><a class="button" href="PagePanier.php">Panier</a></li>';
        }
        else
        {
            print'<li class="Fl"><a href="PageAccueil.php"><img src="/Images/logo.png"></a></li>
                  <li><a class="button" href="PageConnexion.php">Connexion</a></li>';
        }
        ?>

        <li><a class="button" href="PageContact.php">Contact</a></li>
        <li><a class="button" href="PageAPropos.php">a propos</a></li>

        <li><input type="search" id="site-search" name="q" aria-label="Search through site content"><a class="button">Search</a></li>
    </ul>
</header>