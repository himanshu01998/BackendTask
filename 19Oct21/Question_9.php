<?php

// Program to calculate the time given in Seconds into hours, minutes and seconds.


$inp = 3696;

$totalmin = $inp/60;
$m = $totalmin % 60;

$totalhr = $totalmin/60;

$sec = $inp % 60;

echo "H: ",$totalhr, " /M: ",$m, " /S: ",$sec;

?>