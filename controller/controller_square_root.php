<?php
//require_once '../utilities/io_utils.php';
//require_once '../utilities/square_root.php';

/**
 * Handles the square root sub-menu; Reads input, gives result;
 * 
 * @return void
 */
function handleSquareRoot() {

    echo 'Compute the square root using the Babylonian Algorithm'."\n";
    while(true){
        $number = getValidIngeterInput("Give the number: ");
        if( $number >= 0){
            break;
        }
        echo 'The number cannot be lass than 0';
    }
    
    $steps = getValidIngeterInput("Give the number of steps: ");

    $result = getSquareRoot($number, $steps);
    printf("The square root of %d is %f\n", $number, $result);

    endMenu();
}