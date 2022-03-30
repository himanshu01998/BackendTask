<?php
declare(strict_types = 1);
function returnIntval(int $val): int {
    return $val;
}
echo returnIntval(5);
// echo returnIntval(5.56);  Shows Error
?>