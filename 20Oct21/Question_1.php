<?php

// WAP to read cost price and selling price of an item and find out how much loss or 
// profit occurs.


$sp = $_GET['inp1'];
$cp = $_GET['inp2'];

if($sp > $cp){
    echo "Profit: ",$sp - $cp;
}
else{
    echo "Loss: ",$cp - $sp;
}

?>