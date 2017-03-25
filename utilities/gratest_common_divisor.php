<?php

/**
 * Returns the gratest common divisor of two natural numbers.
 * 
 * TODO: Refactor all places that still call this method
 * @param int $a
 * @param int $b
 * @return int
 */
function gratestCommonDivisor($a, $b){
    return computeRecursiveGCD($a, $b);
}

/**
 * Computes the gratest common divisor of two natural numbers using .
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
    if( $a == 0){
        return $b;
    }
    if( $b == 0){
        return $a;
    }
    //untill the numbers are equal
    while ($a != $b){
        //substract the smaller one from the larger one
        if($a > $b ){
            $a-=$b;
        }else{
            $b-=$a;
        }
    }
    return $a;
}

/**
 * Compute the Gratest Common Divisor of two numbers using the iterative repeated division method
 * 
 * @param int $a
 * @param int $b
 * @return int
 */
function computeGCDDivision($a, $b){
    //Repeat untill the remainder is 0
    while ($b != 0){
        //Compute the remainder of A/B; A becomes B, B becomes the remainder;
        list($a, $b) = [$b, $a%$b ];
    }
    return $a;
}

/**
 * Compute the Gratest Common Divisor of two numbers using the binary gcd method
 * 
 * @param int $a
 * @param int $b
 * @return int
 */
function computeBinaryGCD($a, $b){
    //gcd(0, v) = v, because everything divides zero, and v is the largest number that divides v. 
    if( $a == 0 ){
        return $b;
    }
    //Similarly, gcd(u, 0) = u. 
    if( $b == 0 ){
        return $a;
    }
    //If u and v are both even, then gcd(u, v) = 2·gcd(u/2, v/2), because 2 is a common divisor.
    if( $b%2 == 0 && $a%2 == 0 ){
        return 2 * computeBinaryGCD($a/2, $b/2);
    }
    //If u is even and v is odd, then gcd(u, v) = gcd(u/2, v), because 2 is not a common divisor.
    if( $a%2 == 0 ){
        return computeBinaryGCD($a/2, $b);
    }
    // Similarly, if u is odd and v is even, then gcd(u, v) = gcd(u, v/2).
    if( $b%2 == 0 ){
        return computeBinaryGCD($a, $b/2);
    }
    
    //If u and v are both odd, and u ≥ v, then gcd(u, v) = gcd((u − v)/2, v). 
    if( $a >= $b ){
        return computeBinaryGCD(($a-$b)/2, $b);
    }
    //If both are odd and u < v, then gcd(u, v) = gcd((v − u)/2, u). 
    if( $a < $b ){
        return computeBinaryGCD(($b-$a)/2, $a);
    }
}

?>