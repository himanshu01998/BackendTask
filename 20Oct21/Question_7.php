<?php

// WAP to read a number and check whether it is prime or not.(using for loop)(can be div by 2)


$num = $_GET['inp1'];
$f = 0;

for($i = 2; $i < $num; $i++){
    if($num % $i == 0){
        echo $num." is not a prime number.";
        $f = 1;
        break;
    }
}

if($f === 0){
    echo $num." is a prime number";
}

?>