<?php

require "gratest_common_divisor.php";

/**
 * Return the least common multiple of two numbers
 * 
 * @param int $a
 * @param int $b
 * @return int
 */
function leastCommonMultiple($a, $b){
    $result = abs($a * $b) / gratestCommonDivisor($a, $b);
    return $result;
}
?>