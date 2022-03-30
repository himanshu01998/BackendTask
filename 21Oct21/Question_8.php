<?php

// Read an array and perform LINEAR Search.


function LinearSearch($arr, $x) {
    for($i = 0; $i < sizeof($arr); $i++) {
        if($arr[$i] == $x) return $i+1;
    }
    return -1;
}

$arr = array(1, 20, 3, -40, -5, 7, 0, 14);
$num = 14;
echo "Array Elements: ";
foreach($arr as $n){
    echo " ",$n;
}

echo "<br>", "Number: ", $num;
echo "<br>", "At Index: ", LinearSearch($arr, $num)

?>