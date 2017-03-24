<?php

//require_once '../utilities/io_utils.php';
//require_once '../utilities/least_common_multiple.php';


function handleLCM() {

    echo 'Compute the least common multiple of two numbers.'."\n";

    $a = getValidIngeterInput('Give the first number: ');
    $b = getValidIngeterInput('Give the second number: ');

    $result = gratestCommonDivisor($a, $b);
    printf("\nThe result is: %d\n", $result);

    endMenu();
}