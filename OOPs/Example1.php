<?php
class WheeledVehicle{
    function printd(){
        echo "Printd Function Called";
    }

    function setd($str){
        echo "<br>Setd Function Called, ".$str;
    }
}

$car = new WheeledVehicle();
$car->printd();
$car->setd("Himanshu");
?>