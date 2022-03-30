<?php
class Animal {
  public static function makeSound(){
      echo "Dog Barks <br>";
  }
  
  public static function vocalize() {
    echo self::makeSound(); 
  }
}
Animal::vocalize();
?>