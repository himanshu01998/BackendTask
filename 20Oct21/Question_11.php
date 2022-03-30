<?php

// WAP to read a number and check whether it is Perfect or not.(using for loop)


$num = $_GET['inp1'];
$i = 1;
$total = 0;

for($i=1; $i<$num; $i++)
{
    if($num % $i == 0)
    $total += $i;
}

if($total == $num){
    echo "$num is a perfect number";
}

else{
    echo "$num is not a perfect number";
}

?>