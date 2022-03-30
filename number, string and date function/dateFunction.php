<?php
print_r(getdate()."<br>");
$mydate=getdate(date("U"));
echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";

echo "<br> <br>";

print_r(gettimeofday()."<br>");
echo gettimeofday(true)."<br>";

echo "<br> <br>";

echo gmdate("l") . "<br>";
echo gmdate("l jS \of F Y h:i:s A");

echo "<br> <br>";

echo "Oct 3, 1975 was on a ".date("l", gmmktime(0,0,0,10,3,1975));

echo "<br> <br>";

print_r(localtime());
echo "<br>";
print_r(localtime(time(),true));

echo "<br> <br>";

echo(strtotime("now") . "<br>");
echo(strtotime("3 October 2005") . "<br>");
echo(strtotime("+5 hours") . "<br>");
echo(strtotime("+1 week") . "<br>");
echo(strtotime("+1 week 3 days 7 hours 5 seconds") . "<br>");
echo(strtotime("next Monday") . "<br>");
echo(strtotime("last Sunday"));

echo "<br> <br>";

$tz=timezone_open("Asia/Taipei");
print_r(timezone_location_get($tz));

echo "<br> <br>";
echo lcfirst("Hello world!");
?>