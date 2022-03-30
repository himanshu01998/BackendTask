<?php

// Read an array and print sum of elements stored at even indexes.

function SumEven($arr){
    $sum = 0;
    for($i=0; $i < count($arr); $i++){
        if($i % 2 == 0){
            $sum = $sum + $arr[$i];
        }
    }
    return $sum;
}

$arr = array(1, 20, 3, 5, 7, 0, 14);
echo "Array Elements: ";
foreach($arr as $n){
    echo " ",$n;
}

echo "<br>Sum of elements stored at even index: ", SumEven($arr);

?>