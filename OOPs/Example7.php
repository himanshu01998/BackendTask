<?php
class Car {

    function __construct(){
        echo "Default Constructor called<br>";
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

$obj = new Car();
echo $obj -> hello();
?>