<?php

declare(strict_types=1);
function returnsum(float $a, float $b){
    return $a + $b;
}
echo returnsum(3.1, 2.1);
// returnsum(3, "2 days");  Error bcz of string

?>