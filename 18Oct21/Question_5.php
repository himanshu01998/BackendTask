<?php

// WAP to read quantity of 50,25,20,10,5,2,1 paisa coins and convert them into Rs


$fifty = 1000;
$twentyfive = 45;
$twenty = 500;
$ten = 100;
$five = 200;
$two = 500;
$one = 1000;

$a = $fifty * 0.50;
$b = $twentyfive * 0.25;
$c = $twenty * 0.2;
$d = $ten * 0.1;
$e = $five * 0.05;
$f = $two * 0.02;
$g = $one * 0.01;

$total = $a + $b + $c + $d + $e + $f + $g;
echo "Total: Rs ".$total; 

?>