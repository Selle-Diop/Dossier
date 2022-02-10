<?php
function calcul (int $a, int $b):void

{
    $resultperimetre = $a + $b;
    $resultdiff  = $a - $b;
    $resultprod = $a * $b;
    $resultcarre = pow($a,2)+ pow ($b,2);
    $resultdiv = $a/$b;
    $resultmod = $a%$b;
    echo 'le resultat du modulo' .$resultmod. '</br>';
    echo 'le resultat de la division'.$resultdiv. '</br>';
    echo 'le resultat du carre'.$resultcarre. '</br>';
    echo 'le resultat addition'.$resultadd. '</br>';
    echo 'le resultat de la difference'.$resultdiff. '</br>';
    echo 'le resultat du produit'.$resultprod. '</br>';

}



