<?php
function tablemultiplication ($n){ 
$i=1;
while ($i <= $n) {
    $a=$i*$n;
    echo "<li>".$n."*".$i."= " .$a. "</li>\n";
    $i++;
}
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
