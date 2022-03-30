<?php
class vehicle{
    function show($var){
        echo $var.", Vehicle class var called<br>";
    }
}
class car extends vehicle{
    function show($var){
        parent::show($var);
        echo $var.", Car class var called<br>";
    }
}
class bike extends vehicle{
    function show($var){
        parent::show($var);
        echo $var.", Bike class var called<br>";
    }
}

$bar1 = new Car();
$bar2 = new bike();
$bar1 -> show("Hello");
$bar2 -> show("Hello");
?>