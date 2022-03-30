<?php
function adder($str){
$str.=' call by value';
return $str;
}

$str1 ="Hello";
echo adder($str1);
echo "<br>".$str1;
?>