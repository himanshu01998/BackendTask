<?php

// Program to calculate the Simple Interest and Compound Interest.


$p = 5500;
$r = 7;
$t = 3;
$si = ($p * $r * $t)/100;
$amount = $p * pow((1 + $r/100),$t);
$ci = $amount - $p;

echo "Simple intrest: ".$si;
echo "<br>";
echo "Compound intrest: ".$ci;

?>