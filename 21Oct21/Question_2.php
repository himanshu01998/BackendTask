<?php

// Read an array and print its reverse.


$arr = array(1, 2, 3, 4);

echo "Array Elements: ";
foreach($arr as $n){
    echo " ",$n;
}

echo "<br>", "Reversed array: ";

foreach(array_reverse($arr) as $n){
    echo $n, " ";
}

?>