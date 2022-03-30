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
class color extends car{
    function show($var){
        parent::show($var);
        echo $var.", Color class var called<br>";
    }
}

$bar = new color();
$bar -> show("Hello");
?>
