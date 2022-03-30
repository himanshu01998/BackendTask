<?php

// Program to calculate the roots of a quadratic equation.


$a = 1;
$b = 5;
$c = 4;

$D = $b*$b - 4*$a*$c;

$x1 = (-$b + sqrt($D))/(2*$a);
$x2 = (-$b - sqrt($D))/(2*$a);

echo "Square Roots: ", $x1, ", ", $x2;

?>