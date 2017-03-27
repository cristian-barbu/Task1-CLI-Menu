<?php

require_once('square_root.php');

/**
 * Solves the quadric equation given by the argumets.
 * 
 * The equation will have the form:
 *          a*x^2 + b*x + c = 0
 * 
 * @param int $a 
 * @param int $b
 * @param int $c
 * @return array
 */
function solveQuadraticEquation($a, $b, $c){
    if( $a == 0 ){
        return null; // TODO: learn exception handling
    }

    $tmp = $b**2 - 4*$a*$c;
    // If the equation only has complex roots, return []    
    if ( $tmp < 0 ){
        return [];
    }
    // If the equation only has a single root, return it;
    if ( $tmp == 0 ){
        return [(-1 * $b / (2 * $a))];
    }
    // Return the roots of the equation
    return [
        (-1 * $b - getSquareRoot($tmp, 20)) / (2 * $a),
        (-1 * $b + getSquareRoot($tmp, 20)) / (2 * $a)
        ];
}