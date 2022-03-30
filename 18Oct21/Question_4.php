<?php

// WAP to read an amount in Rs. And find out number of 100, 50, 20, 10, 5, 2 rupee notes.


$amt = 1500;

$hundred = $amt/100;
$fifty = $amt/50;
$twenty = $amt/20;
$ten = $amt/10;
$five = $amt/5;
$two = $amt/2;

echo "Amount: ", $amt, "<br>", "Hundred notes: ", $hundred, "<br>", "Fifty notes: ", $fifty;
echo "<br>", "Twenty notes: ", $twenty, "<br>", "Ten notes: ", $ten;
echo "<br>", "Five notes: ", $five, "<br>", "Two notes: ", $two;

?>