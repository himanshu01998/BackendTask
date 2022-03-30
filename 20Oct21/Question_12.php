<?php

// WAP to read a number and check whether it is Palindrome or not.(using while
// loop)(121,474…)


$MyNum = $_GET['inp1'];
$revNum = 0;
$Num = $MyNum;
  
while($Num > 0) {
    $digit = $Num % 10;
    $revNum = $revNum * 10 + $digit;
    $Num = (int)($Num / 10);
}
  
if ($MyNum == $revNum){
    echo $MyNum." is a Palindrome number.\n";
} 
else{
    echo $MyNum." is not a Palindrome number.\n";
}

?>