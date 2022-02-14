<?php
include_once("fonctions.php");
$maLongueur = rand (1,10);
$maLargeur = rand (1,10);
$resultPerimetre = add($maLongueur,$maLargeur);
$resultSurface = produit($maLongueur,$maLargeur);
$resultDiangonale = carre($maLongueur,$maLargeur);
 echo $resultPerimetre. "<br>";
 $resultSurface;
 $resultDiangonale;
 $resultPerimetre;

?>