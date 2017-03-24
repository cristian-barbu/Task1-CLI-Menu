<?php

//require_once '../utilities/io_utils.php';
//require_once '../utilities/base_convertion.php';
//require_once '../utilities/menu.php';

/**
 * Displays the base convertion sub-menu and handles the input
 * 
 * @return void
 */
function handleBaseConversion() {

    $baseMenuOptions = [ 'From binary to decimal', 'From hexadecimal to decimal', 'From decimal to binary', 'From binary to decimal' ];
    $baseMenuFunctions = [ 'handleBinaryToDecimal', 'handleHexToDecimal', 'handleDecimalToBinary', 'handleDecimalToHex' ];
    $baseMenuOptionMessage = 'Chose which type of convertion you want:';
    $baseMenuInputPrompt = '>> ';
    $baseMenuExitMessage = 'Return to main menu';
    $baseMenuInputError = 'Invalid input, please type a number';
    
    runMenu($baseMenuOptions, $baseMenuFunctions,$baseMenuOptionMessage, $baseMenuInputPrompt, $baseMenuExitMessage,$baseMenuInputError);
    
}

function handleBinaryToDecimal(){
    handleSequenceToDecimal(2, 'Type the binary number: ');
}
function handleHexToDecimal(){
    handleSequenceToDecimal(16, 'Type the hexadecimal number: ');
}
/**
 * Handle convertion TO base 10; Read 
 * 
 * @param int $base
 * @param string $msg
 * @return void
 */
function handleSequenceToDecimal($base, $msg){

    $numberSequence = getValidNumberSequence($base, $msg);

    $result = convertToDecimal($numberSequence, $base);
    
    echo 'The decimal number is: '.$result."\n";

    endMenu(); //TODO: Think about how intellingent you were for not calling this just once in the runMenu
}

function handleDecimalToBinary(){
    handleDecimalToSequence(2, 'Give the number you want to convert into binary: ');
}
function handleDecimalToHex(){
    handleDecimalToSequence(16, 'Give the number you want to convert into hexadecimal: ');
}
/**
 * Handle convertion from base 10; Read number convert and print
 * 
 * @param int $base
 * @param string $msg
 * @return void
 */
function handleDecimalToSequence($base, $msg){

    $number = getValidIngeterInput($msg);

    $result = convertFromDecimal($number, $base);

    echo "The decimal number $number has the following representation in base $base: $result\n";

    endMenu();

}