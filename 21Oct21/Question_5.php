<?php

// Read an array and find out max and min.


$arr = array(1, 4, 3, 2, 5, 8, 10);
$len = count($arr);
sort($arr);

echo "Array Elements: ";
foreach($arr as $n){
    echo " ",$n;
}

$max = $arr[$len-1];
$min = $arr[0];

echo "<br>", "Max: ",$max;
echo "<br>", "Min: ",$min;


?>