<?php 
/**
 * Runs the application
 * 
 * @return void
 */
function main(){
    require_once 'include.php';

    $mainMenuOptions = ['Solve a quadratic equation', 'Compute the square root', 'Compute Gratest Common Divisor', 'Compute Least Common Multiple', 'Compute the sum of some fractions', 'Base convertions'];
    $mainMenuFunctions = [ 'handleQuadraticEquation', 'handleSquareRoot', 'handleGCD', 'handleLCM', 'handleFractions', 'handleBaseConversion' ];
    $mainMenuOptionMessage = 'Chose functionality:';
    $mainMenuImputPrompt = '>> ';
    $mainMenuExitMessage = 'Close application';
    $mainMenuInputError = 'Invalid input, please type a number';

    runMenu($mainMenuOptions, $mainMenuFunctions, $mainMenuOptionMessage, $mainMenuImputPrompt, $mainMenuExitMessage, $mainMenuInputError);
    exit;
}

main();
?>