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
        return null;
    }
    
    $guess = $number / 2;
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