<?php

/**
 * Returns the square root of a number using the Babylonian Algorithm, with a fixed number of steps
 * 
 * @param int $number 
 * @param int $steps - Number of iterations to make 
 * @return float
 */
function getSquareRoot($number, $steps){
    if($number < 0){
        return null; // Once again, learn exceptions
    }
    /* A good enough initial guess is $number/2 */
    $guess = $number / 2;
    /* At each step, make a new guess, using the number and the previous guess */
    for($step = 0; $step < $steps; $step++){
        $newGuess = ($guess + $number/$guess) / 2;
        
        /* Avoid unnecessary iterations */
        if($newGuess == $guess){
            return $newGuess;
        }
        
        $guess = $newGuess;
    }

    return $guess;

}
?>