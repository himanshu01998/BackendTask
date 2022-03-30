<?php
function generator(){
    yield "zero";
    yield "one";
    yield "two";
}
function generator1(){
    yield "three";
    yield "four";
    yield "five";
    yield "six";
}
function generator2(){
    yield "seven";
    yield "eight";
    yield "nine";
}
foreach(generator() as $value){
    echo $value, PHP_EOL;
}
foreach(generator1() as $value){
    echo $value, PHP_EOL;
}
?>