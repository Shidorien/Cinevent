<!DOCTYPE html>

<?php

if(isset($_GET['LAN']))
{
    if($_GET['LAN'] == "en")
    {include "Data/Traduction/EN.php";}
    else
    {include "Data/Traduction/FR.php";}
}
else
{include "Data/Traduction/FR.php";}

include 'fct.php';

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

include "Vues/Header.php";

?>

<!--CONTROLEUR------------------------------------------------------------------------>

<div class=container>

</div>

<!--FOOTER------------------------------------------------------------------------>

<?php
include "Vues/Footer.php";
?>

 