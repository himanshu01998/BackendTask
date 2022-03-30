<?php

// WAP to read basic salary from user and calculate gross salary where DA 40% of basic
// salary and HRA is 20% of basic salary.


$bs = 30000;

$hra = $bs * (20/100.00);  
$da  = $bs * (40/100.00);  
$gs  = $bs + $hra + $da;

echo "Basic Salary: ", $bs, "<br>", "Gross Salary: ", $gs;

?>