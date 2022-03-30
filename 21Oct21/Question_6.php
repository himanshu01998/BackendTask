<?php

// Read an array and count total no. of +ve, -ve and zero eliments.


$arr = array(1, 2, 3, -4, -5, 7, 0);
$sumpos = 0;
$sumneg = 0;
$sumzero = 0;

echo "Array Elements: ";
foreach($arr as $n){
    echo " ",$n;
    if($n  < 0){
        $sumneg = $sumneg + 1;
    }
    elseif($n > 0){
        $sumpos = $sumpos + 1;
    }
    else{
        $sumzero = $sumzero + 1;
    }
}

echo "<br>", "Total Positive: ".$sumpos;
echo "<br>", "Total Negative: ".$sumneg;
echo "<br>", "Total Zeroes: ".$sumzero;

?>