<?php
// class A {
//     private $x = 1;
// }
// // Define a closure Pre PHP 7 code
// $getValue = function() {
//     return $this->x;
// };

// // Bind a clousure
// $value = $getValue->bindTo(new A, 'A'); 

// print($value());
?>

<?php
class A {
    private $x = 1;
}

// PHP 7+ code, Define
$value = function() {
    return $this->x;
};
print($value->call(new A));
?>