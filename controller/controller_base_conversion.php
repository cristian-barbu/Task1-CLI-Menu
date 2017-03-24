<?php

//require_once '../utilities/io_utils.php';
//require_once '../utilities/base_convertion.php';
//require_once '../utilities/menu.php';

function handleBaseConversion() {

    $baseMenuOptions = [ 'From binary to decimal', 'From hexadecimal to decimal' ];
    $baseMenuFunctions = [ 'handleBinaryToDecimal', 'handleHexToDecimal' ];
    $baseMenuOptionMessage = 'Chose which type of convertion you want:';
    $baseMenuInputPrompt = '>> ';
    $baseMenuExitMessage = 'Return to main menu';
    $baseMenuInputError = 'Invalid input, please type a number';
    
    runMenu($baseMenuOptions, $baseMenuFunctions,$baseMenuOptionMessage, $baseMenuInputPrompt, $baseMenuExitMessage,$baseMenuInputError);
    
    // endMenu();
}

function handleBinaryToDecimal(){
    handleStringToDecimal(2, 'Type the binary number: ');
}
function handleHexToDecimal(){
    handleStringToDecimal(16, 'Type the hexadecimal number: ');
}

function handleStringToDecimal($base, $msg){

    $numberSequence = getValidNumberSequence($base, $msg);

    $result = convertToDecimal($numberSequence, $base);
    
    echo 'The decimal number is: '.$result."\n";

    endMenu(); //TODO: Think about how intellingent you were for not calling this just once in the runMenu
}