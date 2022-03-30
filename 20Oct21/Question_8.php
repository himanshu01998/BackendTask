<?php

// WAP to read a number and print its reverse.(using while loop)


$inp = $_GET['inp1'];
$rev = 0;

while($inp > 1){
    $rem = $inp % 10;
    $rev = ($rev * 10) + $rem;
    $inp = ($inp / 10);
}

echo $rev;

?>
