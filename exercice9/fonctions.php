<?php
function tablemultiplication ($n){ 
$i=1;
while ($i <= $n) {
    $a=$i*$n;
    echo "<li>".$a. "</li>\n";
    $i++;
}
}
