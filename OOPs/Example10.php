<?php
Interface MyInterface1 {
	public function show();
}
abstract class base{
    abstract function prin();
}
class MyClass implements MyInterface1{
    public function show(){
        echo "Interface function called<br>";
	}
    function prin(){
        echo "derived class";
    }
}
$b= new MyClass();
$b-> show();
$b->prin();
?>