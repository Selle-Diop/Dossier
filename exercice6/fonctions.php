<?php
function equation ($a,$b,$c)
{
    if($a == 0){
        echo "l'equation n'est pas du second degre \n";
        if ($b==0){
            if (c==0) {
                echo "infinie de solution";
            }
            else{
                echo "pas de solution"; 
            }
        }
        else {
            $result = -1 * $c/$b;
            echo $result;
        }
    }
    else {
        $delta = pow($b,2) - 4*$a*$c;
        if ($delta == 0){
         $result = -1*$b/2*$a;
         echo $result;
        }
        elseif ($delta > 0){
            $result1 = (-1 *$b -sqrt($delta))/2*$a;
            $result2 = (-1 *$b +sqrt($delta))/2*$a;
            echo "on a deux solutions : \n";
            echo $result1 . "\n";
            echo $result2 . "\n";
        }
        else {
            echo "il n'y a pas de solution \n";
        }
    }
}

function nombrenumerique ($nbr):bool 
{

    return ($nbr == 0 || is_numeric($nbr)) ? true : false;

    
}
function champ_Valid($a):bool
{
    return nombrenumerique($a) && !empty($a);
}

function estVide($n):bool{ 
    return empty($n); 
}
function estNum($n){
    return is_numeric($n);
}
function estValide($n,string $key,array &$err):void{
    if(estVide($n)){
        $err[$key]="veuillez saisir une valeur";
    }else {
        if(!estNum($n)){
            $err[$key]="veuillez saisir une valeur numerique";
        }
    }
} 