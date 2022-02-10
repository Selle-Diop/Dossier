<?php
include_once ("fonctions.php");
define ("VAL_MIN",1);
define ("VAL_MAX",100);
$a = rand (VAL_MIN,VAL_MAX);
$b = rand (VAL_MIN,VAL_MAX);
echo permutation($a,$b);