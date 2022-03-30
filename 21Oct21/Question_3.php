<?php

// Read an array and count total no. of even and odd eliments.


$arr = array(1, 2, 3, 4, 5, 7);
$sumeven = 0;
$sumodd = 0;

echo "Array Elements: ";
foreach($arr as $n){
    echo " ",$n;
    if($n % 2 == 0){
        $sumeven = $sumeven + 1;
    }
    else{
        $sumodd = $sumodd + 1;
    }
}

echo "<br>", "Total Even: ".$sumeven;
echo "<br>", "Total Odd: ".$sumodd;

?>