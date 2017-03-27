<?php

//require_once '../utilities/io_utils.php';
//require_once '../utilities/add_fractions.php';

/**
 * Handler for the fractions submenu; Reads fractions and prints the sum;
 * 
 * @return void
 */
function handleFractions() {
    $numerators = [];
    $denominators = [];

    /* How many fractions to read */
    while(true){
        $numberOfFractions = getValidIngeterInput('How many fractions do you want to add? ');
        if($numberOfFractions > 1){
            break;
        }
        echo 'You must read at least 2 fractions'."\n";
    }
    

    /* Read the fractions and save them in the lists */
    while($numberOfFractions > 0){
        $fraction = readFraction();
        
        /* Only add valid function */
        if(checkFraction($fraction[0], $fraction[1])){ 
            array_push($numerators, $fraction[0]);
            array_push($denominators, $fraction[1]);
            $numberOfFractions--;
            echo 'Fraction ['.$fraction[0].'/'.$fraction[1].'] added'."\n";
        }else{
            echo 'Denominator cannot be 0'."\n";// TODO: Handle this better
        }
    }
    
    /* Compute the sum and print it */
    $result = addFractions($numerators, $denominators);
    
    printFraction($result);
        
    endMenu();
}

/**
 * Output the fraction sum.
 * 
 * @param array $result
 * @return void
 */
function printFraction($result){
    if(count($result) == 2){
        echo "\n\n".'The sum is: ['.$result[0].'/'.$result[1]."]\n\n"; 
        return;
    }
    if(count($result) == 1){
        echo "\n\n".'The sum is: ['.$result[0]."]\n\n";
        return;
    }
    echo 'There was an error in the matrix'."\n";
    return;
}

/**
 * Reads the numerator and denominator and returns them
 * 
 * @return array
 */
function readFraction(){
    echo "\n";
    $numerator = getValidIngeterInput("Give the numerator: ");
    $denominator = getValidIngeterInput("Give the denominator: ");
    return [$numerator, $denominator];
}

/**
 * Checks if the Fraction is a valid one
 * 
 * @param int $numerator
 * @param int $denominator
 * @return boolean
 */
function checkFraction($numerator, $denominator){
    if($denominator == 0){
        return false;
    }
    return true;
}