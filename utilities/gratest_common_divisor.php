<?php

/**
 * Returns the gratest common divisor of two natural numbers.
 * 
 * @param int $a
 * @param int $b
 * @return int
 */
function gratestCommonDivisor($a, $b){
    return computeRecursiveGCD($b, $a % $b);
}

/**
 * Returns the gratest common divisor of two natural numbers.
 * 
 * @param int $a
 * @param int $b
 * @return int
 */
function computeRecursiveGCD($a, $b){
    if($b == 0){
        return $a;
    }
    return computeRecursiveGCD($b, $a % $b);
}

/**
 * Return the GCD of two natural numbers using the Repeated Substraction method
 * 
 * @param int $a
 * @param int $b
 * @return int
 */
function computeGCDSubstraction($a, $b){
    /* Apply the repeated substraction Method */
    while ($a != $b){
        if($a > $b ){
            $a-=$b;
        }else{
            $b-=$a;
        }
    }
    return $a;
}

function computeGCDDivision($a, $b){
    /* Apply the repeated division Method */
    while ($a != 0){
        list($a, $b) = [$b, $a%$b ];
    }
}


?>