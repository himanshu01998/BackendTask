<?php

// Read an array and perform BINARY Search.


function BinarySearch($arr, $x) {
    if (count($arr) == 0) return false; 
    $low = 0; 
    $high = count($arr) - 1; 
      
    while ($low <= $high) { 
        $mid = floor(($low + $high) / 2); 
   
        if($arr[$mid] == $x) { 
            return $mid; 
        } 
  
        if ($x < $arr[$mid]) { 
            $high = $mid - 1; 
        } 
        else { 
            $low = $mid + 1; 
        } 
    } 
}

$arr = array(1, 20, 3, -40, -5, 7, 0, 14);
sort($arr);
$num = 3;
echo "Array Elements: ";
foreach($arr as $n){
    echo " ",$n;
}

echo "<br>", "Number: ", $num;
echo "<br>", "At Index: ", BinarySearch($arr, $num)

?>