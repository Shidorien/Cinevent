
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
<table class="tab_head">

<tr>
<th style="background-color: red;" rowspan="4">LOGO</th>
<th style="background-color: grey;" rowspan="2">BOUTON</th>
</tr>

<tr></tr>

<tr>
<th style="background-color: red;">Barre rouge</th>
</tr>

<tr>
<th> Barre VIDE</th>
</tr>
</table>

</header>