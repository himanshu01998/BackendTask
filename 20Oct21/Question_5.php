<?php

// WAP to read four numbers and find out maximum.


$num1 = $_GET['inp1'];
$num2 = $_GET['inp2'];
$num3 = $_GET['inp3'];
$num4 = $_GET['inp4']; 

if($num1 > $num2 && $num1 > $num3 && $num1 > $num4){
    echo $num1." is greater";
}

elseif($num2 > $num3 && $num2 > $num4){
    echo $num2." is greater";
}

elseif($num3 > $num4){
    echo $num3." is greater";
}

else{
    echo $num4." is greater";
}


?>