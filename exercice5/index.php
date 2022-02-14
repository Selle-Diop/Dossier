<?php
 require_once "fonction.php";
 echo "les deux points"."<br>";
 $aa=rand(1,4);
 $au=rand(4,6);
 $ah=rand(6,8);
 $at=rand(8,12);
 echo "<br>";
 echo "les coordonnées du point du A : A (".$aa." , ".$au.")"."<br>";
 echo " les coordonnées du point B : B (".$ah." , ".$at.")"."<br>";
  $di = point($aa,$au,$ah,$at);
  echo "la distance entre ces deux points est : ".$di;
?>