<?php

// WAP to read marks of three subjects of a student and print total, percentage and division.


$sub1 = $_GET['inp1'];
$sub2 = $_GET['inp2'];
$sub3 = $_GET['inp3']; 

$per = (($sub1 + $sub2 + $sub3) / 300) *100;

echo "Percentage: ",$per;

if($per >= 90 && $per <= 100){
    echo "<br>", "Grade: A";
}

elseif($per >= 75 && $per < 90){
    echo "<br>", "Grade: B";
}

elseif($per >= 50 && $per < 75){
    echo "<br>", "Grade: C";
}

elseif($per >= 36 && $per < 50){
    echo "<br>", "Grade: D";
}

elseif($per < 36){
    echo "<br>", "Fail";
}

else{
    echo "<br>", "Wrong Inputs";
}

?>