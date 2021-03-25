<header>
<?php session_start ();?>
<?php 



?>

<link rel="stylesheet" href="style.css">
<script type="text/javascript" src="script/script.js"></script>

<form name="Langue" method="GET">

<div class="Head">
    <div class="Logo"><a href="PageAccueil.php"><img src="/GerardRadeCinevent/Data/images/logo.png"></a></div>
    <div class="HorsLogo">
        <div class="Bouton">
        <ul>
        <li >
            <select name='LAN' id='LAN' class="Bouton_Menu" onchange='javascript:submit();'>
                <option value='fr' <?php if(isset($_GET['LAN'])){if($_GET['LAN'] == "fr"){echo ' selected';}} ?>> FR </option>
                <option value='en' <?php if(isset($_GET['LAN'])){if($_GET['LAN'] == "en"){echo ' selected';}} ?>> EN </option>

            </select>
        </li>

        <?php if (isset($_SESSION['email']))
        {?>
            <li class="Bouton_Menu"><a href="script/deconnexion.php">Deconnexion</a></li>
        <?php
        }
        else
        {
        ?>
            <li class="Bouton_Menu"><a href="PageConnexion.php">Connexion</a></li>
        <?php
        }
        ?>
        
            <li class="Bouton_Menu"><a href="PageContact.php"><?php echo $Contact ?></a></li>
            <li class="Bouton_Menu"><a href="PageAPropos.php"><?php echo $APropos ?></a></li>
            <li class="Bouton_Recherche"><img src="/GerardRadeCinevent/Data/images/loupe.png"></li>
            <li class="Barre_Recherche"><input type="search" placeholder="<?php echo $chercher ?>" ></li>
        </ul>
    </div>

        <div>
            <div class="BarreRouge"></div>
        </div>
    </div>
</div>
</form>
</header>