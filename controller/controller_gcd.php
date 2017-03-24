<?php

//require_once '../utilities/io_utils.php';
//require_once '../utilities/gratest_cummon_divisor.php';

function handleGCD() {

    echo 'Compute the grates cummon divisor of two numbers.'."\n";

    $a = getValidIngeterInput('Give the first number: ');
    $b = getValidIngeterInput('Give the second number: ');

    $result = gratestCommonDivisor($a, $b);
    printf("\nThe result is: %d\n", $result);

    endMenu();
}