<?php
$str = addcslashes("Hello World!","W");
echo($str);

echo "<br> <br>";

$str = bin2hex("Hello World!");
echo($str);

echo "<br> <br>";

echo chop($str,"World!");

echo "<br> <br>";

echo chr(52) . "<br>";
echo chr(052);

echo "<br> <br>";

echo count_chars($str,3);

echo "<br> <br>";

$arr = array('Hello','World!','Beautiful','Day!');
echo join(" ",$arr);

?>