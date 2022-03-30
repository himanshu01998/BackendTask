<?php

// WAP to read a number and check whether its Armstrong or not.(using while loop)((Sum
// of xQube)=x. like153)


$num = $_GET['inp1'];  
$total = 0;  
$x = $num;

while($x != 0){  
    $rem = $x % 10;  
    $total = $total + $rem * $rem * $rem;  
    $x = $x / 10;  
}  

if($num == $total)  {  
    echo $num." is an Armstrong number";  
}  

else{  
    echo $num." is not an armstrong number";  
} 

?>