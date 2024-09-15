<!DOCTYPE html>

<?php

session_start ();
include 'fct.php';
include getLan();


?>

<!--HTML------------------------------------------------------------------------>

<html lang= "<?php echo $Langue?>">

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

<div class="container">

    <?php
    include getUrl();
    ?>

</div>

<!--FOOTER------------------------------------------------------------------------>

<?php
include "Vues/Footer.php";
?>

 