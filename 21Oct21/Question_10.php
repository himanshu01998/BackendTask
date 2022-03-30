<?php

// Read two array of same dimension and swap their elements.


function swapArray($arr1, $arr2){
    $temp = array();
    for($i=0; $i<count($arr1); $i++){
        $arr1[$i] = $arr1[$i] + $arr2[$i];
        $arr2[$i] = $arr1[$i] - $arr2[$i];
        $arr1[$i] = $arr1[$i] - $arr2[$i];
    }

    echo "<br><br>Array 1 Elements after swap:";
    foreach($arr1 as $n){
        echo " ",$n;
    }

    echo "<br>Array 2 Elements after swap: ";
    foreach($arr2 as $n){
        echo " ",$n;
    }

}

$arr1 = array(1, 20, 3, 14);
echo "Array 1 Elements before swap:";
foreach($arr1 as $n){
    echo " ",$n;
}

$arr2 = array(10, 2, 30, 4);
echo "<br>Array 2 Elements before swap: ";
foreach($arr2 as $n){
    echo " ",$n;
}

swapArray($arr1, $arr2)

?>