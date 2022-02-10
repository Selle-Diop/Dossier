<?php
$maLongueur = rand (1,10);
$maLargeur = rand (1,10);
$resultPerimetre = addition($maLongueur,$maLargeur)*2;
$resultSurface = produit($maLongueur,$maLargeur);
$resultDiangonale = carre($maLongueur,$maLargeur);
echo 'le perimetre du rectangle est'.$resultPerimetre. '<br>';
echo $resultSurface. '<br>';
echo $resultDiangonale;
?>