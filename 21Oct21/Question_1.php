<?php

// Read an array and print sum of its elements.


$arr = array(1, 2, 3, 4);
$sum = 0;

echo "Array Elements: ";
foreach($arr as $n){
    echo " ",$n;
    $sum = $sum + $n;
}

echo "<br>", "Sum: ".$sum;

?>