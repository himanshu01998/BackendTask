<?php

// Read an array and print it in ascending order.(SORTING)


$arr = array(1, 20, 3, -40, -5, 7, 0, 14);
echo "Array Elements before sorting: ";
foreach($arr as $n){
    echo " ",$n;
}

sort($arr);
echo "<br>Array Elements after sorting: ";
foreach($arr as $n){
    echo " ",$n;
}


?>