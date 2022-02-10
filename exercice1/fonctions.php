<?php
function carre (int $cote):void 
{
    $resultPerimetre = $cote * 4;
    $resultSurface = $cote * $cote;
    $resultDiagonale = sqrt(2*pow($cote,2));
    echo 'le perimetre est' .$resultPerimetre. '</br>';
    echo 'la surface est' .$resultSurface. '</br>';
    echo 'la diago est' .$resultDiagonale. '</br>';

}






?>