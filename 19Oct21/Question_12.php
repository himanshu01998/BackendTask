<?php

// Program to calculate the Gross Salary when Basic Salary is given. 
// The allowances HRA(%) ,DA (%), PF and Medical are also given. 
// Add the HRA and DA in the Basic Salary but deduct PF and Medical from the Salary.


$bs = 30000;

$hra_prcnt = 30;
$da_prcnt = 50;

$pf = 1500;
$mi = 1200;

$hra = $bs * ($hra_prcnt/100.00);  
$da  = $bs * ($da_prcnt/100.00);  
$gs  = $bs + $hra + $da;

echo "<br>", "Gross Salary Before Deduction: ", $gs;

$gs = $gs - ($pf + $mi); 

echo "<br><br>Basic Salary: ", $bs, "<br>", "Gross Salary: ", $gs;

?>