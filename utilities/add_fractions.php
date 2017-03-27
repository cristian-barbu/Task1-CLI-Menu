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
    
    /* Cancel if less than two fractions were given */
    $len = count($denominators);
    if( $len < 2){
        return null; // Null because we don't know exceptions
    }
    /*Cancel if different number of numerators and denominators */
    if( count($numerators) != $len){
        return null; // Null because we don't know exceptions
    }

    /* Compute the least common multiple */
    $lcm = 1;
    foreach ( $denominators as $denominator){
        $lcm = leastCommonMultiple($denominator, $lcm);
    }
    /* Compute the sum of the numerators */
    $sum = 0;
    foreach ( $numerators as $index => $numerator){
        $sum += $numerator * ($lcm / $denominators[$index]);
    }
    /* Retrun the integer value of the fraction if possible */
    if( $sum % $lcm == 0){
        return [ $sum / $lcm ];
    }

    return simplifyFraction($sum, $lcm);
}

/**
 * Simplifies a fraction using the Gratest common divisor of the numerator and denominator
 * 
 * @param int $numerator
 * @param int $denominator
 * @return array
 */
function simplifyFraction($numerator, $denominator = 1){
    /* Move the minus sign to the denominator to the numarator */
    if($denominator < 0){
        $denominator *= -1;
        $numerator *= -1;
    }
    $divisor = abs(gratestCommonDivisor($numerator, $denominator));
    //Return simplified fraction
    return [
        ($numerator / $divisor),
        ($denominator / $divisor)
    ];
}