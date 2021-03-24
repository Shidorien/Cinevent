<header>
<?php session_start ();?>
<?php include 'fct.php' ;

if(isset($_GET['LAN']))
{
    if($_GET['LAN'] == "2")
    {include "Traduction/EN.php";}
    else
    {include "Traduction/FR.php";}
}
else
{include "Traduction/FR.php";}

?>

<link rel="stylesheet" href="style.css">
<script type="text/javascript" src="script/script.js"></script>

<form name="Langue" method="GET">

<div class="Head">
    <div class="Logo"><a href="PageAccueil.php"><img src="/GerardRadeCinevent/images/logo.png"></a></div>
    <div class="HorsLogo">
        <div class="Bouton">
        <ul>
        <li >
            <select name='LAN' id='LAN' class="Bouton_Menu" onchange='javascript:submit();'>
                <option value='1' <?php if(isset($_GET['LAN'])){if($_GET['LAN'] == "1"){echo ' selected';}} ?>> FR </option>
                <option value='2' <?php if(isset($_GET['LAN'])){if($_GET['LAN'] == "2"){echo ' selected';}} ?>> EN </option>

            </select>
        </li>

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
        
            <li class="Bouton_Menu"><a href="PageContact.php"><?php echo $Contact ?></a></li>
            <li class="Bouton_Menu"><a href="PageAPropos.php"><?php echo $APropos ?></a></li>
            <li class="Bouton_Recherche"><img src="/GerardRadeCinevent/images/loupe.png"></li>
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