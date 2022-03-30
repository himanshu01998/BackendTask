<?php

// Program to calculate the volume and surface area of a sphere.


$r = 7;

$v = (($r*$r*$r)*22/7)*4/3;
echo "Volume of Sphere: ", $v;

$a = 4*22/7*($r*$r*$r);
echo "Surface area of Sphere: ", $a;

?>