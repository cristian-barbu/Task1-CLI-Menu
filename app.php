<?php 
/**
 * Runs the application
 * 
 * @return void
 */
function main(){
    require_once 'include.php';

    $mainMenuOptions = ['Solve a quadratic equation', 'Get the square root', 'Gratest Common Divisor', 'Least Common Multiple', 'Sum of fractions', 'Base convertions'];
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