<?php
class Car {

    public $num1, $num2;
    function __construct($num1, $num2){
        echo $num1 + $num2;
        echo " Paramatrized Constructor called<br>";
    }

    public $comp;
    public $color = 'beige';
    public $hasSunRoof = true;

    public function hello()
    {
      return "Beep I am a <i>" . $this -> comp . "</i>, and I am <i>" .
        $this -> color;
    }
}

$obj = new Car(3, 5);
echo $obj -> hello();
?>