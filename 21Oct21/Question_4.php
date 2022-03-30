<?php

// Read an array and find out max and second max.


$arr = array(1, 4, 3, 2, 10, 5, 10, 8, 10);
$len = count($arr);
sort($arr);

echo "Array Elements: ";
foreach($arr as $n){
    echo " ",$n;
}

$max = $arr[$len-1];
echo "<br>", "Max: ",$max;

foreach(array_reverse($arr) as $n){
    if($max == $n){
        continue;
    }
    else{
        echo "<br>", "Second Max: ",$n;
        break;
    }
}

?>