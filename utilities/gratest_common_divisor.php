<?php

/**
 * Returns the gratest common divisor of two natural numbers.
 * 
 * @param int $a
 * @param int $b
 * @return int
 */
function gratestCommonDivisor($a, $b){
    if($b == 0){
        return $a;
    }
    return gratestCommonDivisor($b, $a % $b);
}
?>