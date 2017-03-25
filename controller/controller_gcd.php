<?php

//require_once '../utilities/io_utils.php';
//require_once '../utilities/gratest_cummon_divisor.php';

/**
 * Handles the Grates Common Divisor sub-menu; Read two numbers and print the result
 * 
 * @return void
 */
function handleGCD() {

    $gcdMenuOptions = [ 'Binary GCD', 'Repeated Divisions - Recursive', 'Repeated Divisions - Iterative', 'Repeated Substractions' ];
    $gcdMenuFunctions = [ 'handleBinaryGCD', 'handleRecursiveDivisionGCD', 'handleIterativeDivisionGCD', 'handleSubstractionGCD' ];
    $gcdMenuOptionMessage = 'Chose which type of GCD method you want:';
    $gcdMenuInputPrompt = '>> ';
    $gcdMenuExitMessage = 'Return to main menu';
    $gcdMenuInputError = 'Invalid input, please type a number';
    
    runMenu($gcdMenuOptions, $gcdMenuFunctions,$gcdMenuOptionMessage, $gcdMenuInputPrompt, $gcdMenuExitMessage,$gcdMenuInputError);

    
}

/**
 * Handle getting the Input and the result of the GCD.
 * 
 * @param string $gcdFunction
 * @return void
 */
function handleAllGCD($gcdFunction = 'gratestCommonDivisor') {
    echo 'Compute the Gratest Common Divisor of two numbers.'."\n";
    //Read the numbers 
    $a = getValidIngeterInput('Give the first number: ');
    $b = getValidIngeterInput('Give the second number: ');
    //Call the argument function to compute the GCD
    $result = call_user_func($gcdFunction, $a, $b);
    printf("\nThe result is: %d\n", $result);

    endMenu();
}

function handleBinaryGCD(){
    handleAllGCD('computeBinaryGCD');
}

function handleIterativeDivisionGCD(){
    handleAllGCD('computeGCDDivision');
}

function handleRecursiveDivisionGCD(){
    handleAllGCD('computeRecursiveGCD');
}

function handleSubstractionGCD(){
    handleAllGCD('computeGCDSubstraction');
}