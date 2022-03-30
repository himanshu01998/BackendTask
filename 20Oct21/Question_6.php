<?php

// WAP to read a number and calculate factorial.(using for loop)


$num1 = $_GET['inp1'];
$fact = 1;

for($i=1; $i<=$num1; $i++){
    $fact = $fact * $i;
}

echo "Factorial of ", $num1, " is ", $fact;

?>