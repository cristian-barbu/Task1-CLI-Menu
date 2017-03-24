<?php
//require_once '../utilities/io_utils.php';
//require_once '../utilities/square_root.php';

/**
 * Handles the square root sub-menu; Reads input, gives result;
 * 
 * @return void
 */
function handleSquareRoot() {

    echo 'Computes the square root using the Babylonian Algorithm'."\n";

    $number = getValidIngeterInput("Give the number: ");
    $steps = getValidIngeterInput("Give the number of steps: ");

    $result = getSquareRoot($number, $steps);
    printf("The square root of %d is %f\n", $number, $result);

    endMenu();
}