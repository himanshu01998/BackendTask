<?php

// WAP to read three numbers and find out maximum.


$num1 = $_GET['inp1'];
$num2 = $_GET['inp2'];
$num3 = $_GET['inp3']; 

if($num1 > $num2 && $num1 > $num3){
    echo $num1." is greater";
}

elseif($num2 > $num3){
    echo $num2." is greater";
}

else{
    echo $num3." is greater";
}

?>