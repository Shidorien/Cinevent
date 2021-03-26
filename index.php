<!DOCTYPE html>

<?php

if(isset($_GET['LAN']))
{
    if($_GET['LAN'] == "en")
    {require "Data/Traduction/EN.php";}
    else
    {require "Data/Traduction/FR.php";}
}
else
{require "Data/Traduction/FR.php";}

require 'fct.php';

?>

<!--HTML------------------------------------------------------------------------>

<html lang= "<?php echo $langue?>">

<head>
    <meta charset="utf-8">
    <title>CinéVent - Vente en ligne de film</title>
    <link rel="stylesheet" href="style.css">
</head>

<!--HEADER------------------------------------------------------------------------>
<?php

require "Vues/Header.php";

?>

<!--CONTROLEUR------------------------------------------------------------------------>

<div class=container>

    <?php
    getUrl();
    ?>

</div>

<!--FOOTER------------------------------------------------------------------------>

<?php
require "Vues/Footer.php";
?>

 