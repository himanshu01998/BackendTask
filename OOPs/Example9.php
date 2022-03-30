<?php
class vehicle{
    function __construct(){
       echo "Vehicle Constructor called<br>"; 
    }
}
class car extends vehicle{
    function __construct(){
        parent::__construct();
        echo "Car Constructor called<br>"; 
    }
}
class color extends car{
    function __construct(){
        parent::__construct();
       echo "Color Constructor called<br>"; 
    }
}

$bar = new color();
$bar -> show("Hello");
?>