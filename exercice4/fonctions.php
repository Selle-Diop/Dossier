<?php
function permutation($a,$b){
    echo "le nombre avant la permutation est :".$a. "et" .$b. "<br>";
    if($a>$b){
        $t=$a;
        $a=$b;
        $b=$t;
        echo "le nombre apres la permutation est :" .$a. "et" .$b. "<br>";
    }
    
}
