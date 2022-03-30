<?php

// WAP to read a n digit number and print how much digits are 
// available in the number.(using while and do-while)

$inp = $_GET['inp1'];

$sum = 0;
$m;

echo "Num is: ", $inp, "<br>";

while ($inp > 0) {
    $m = $inp % 10;
    $m = intval ($m);
    $sum = $sum + 1;
    $inp = $inp / 10;
    $inp = intval ($inp);
}

echo "Number of digits is: ".$sum;

?>