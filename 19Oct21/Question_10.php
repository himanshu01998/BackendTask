<?php

// Program to convert given number of days into Months & Days.


$inp = 340;

$m = $inp / 30;
$d = $m % 30;

echo "Months: ", $m,"<br>", " Days: ", $d;

?>