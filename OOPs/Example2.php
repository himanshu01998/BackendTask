<?php
class vehicle{
    function show($var){
        echo $var.", Vehicle class var <br>";
    }
}
class car extends vehicle{
    function show($var){
        parent::show($var);
        echo $var.", Car class var";
    }
}
$bar = new car();
$bar -> show("Hello");
?>
