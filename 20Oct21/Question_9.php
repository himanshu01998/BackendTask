<?php

// WAP to read a number and sum of its digits(using while loop)

$inp = $_GET['inp1'];

$sum = 0;
$m;

echo "Num is: ", $inp, "<br>";

while ($inp > 0) {
    $m = $inp % 10;
    $m = intval ($m);
    $sum = $sum + $m;
    $inp = $inp / 10;
    $inp = intval ($inp);
}

echo "Sum of digits is: ".$sum;

?>