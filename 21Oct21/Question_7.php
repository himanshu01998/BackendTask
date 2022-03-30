<?php

// Read an array and count no. of eliment which are divisible by 5.


$arr = array(1, 20, 3, -40, -5, 7, 0);
$sum = 0;

echo "Array Elements: ";
foreach($arr as $n){
    echo " ",$n;
    if($n % 5 == 0){
        $sum = $sum + 1;
    }
    else{
        continue;
    }
}

echo "<br>", "Total divisible by 5: ".$sum;

?>