<?php

require_once('least_common_multiple.php');
require_once('gratest_common_divisor.php');

/**
 * Return the sum of a variable number of fractions
 * 
 * @param array $numerators
 * @param array $denominators
 * @return array
 */
function addFractions(array $numerators, array $denominators){
    
    $len = count($denominators);
    if( $len < 2){
        return null;
    }
    if( count($numerators) != $len){
        return null;
    }

    $lcm = 1;
    foreach ( $denominators as $denominator){
        $lcm = leastCommonMultiple($denominator, $lcm);
    }

    $sum = 0;
    foreach ( $numerators as $index => $numerator){
        $sum += $numerator * ($lcm / $denominators[$index]);
    }

    if( $sum % $lcm == 0){
        return [ $sum / $lcm ];
    }

    return simplifyFraction($sum, $lcm);
}

/**
 * Simplifies a fraction
 * 
 * @param int $numerator
 * @param int $denominator
 * @return array
 */
function simplifyFraction($numerator, $denominator = 1){
    $divisor = gratestCommonDivisor($numerator, $denominator);
    return [
        ($numerator / $divisor),
        ($denominator / $divisor)
    ];
}