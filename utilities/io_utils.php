<?php

/**
 * Read an integer from STDIN; Retry if invalid input;
 * 
 * @param string $msg
 * @param string $errMsg
 * @return int
 */
function getValidIngeterInput($msg = 'Please type a number: ', $err = 'That was not a number'){
    $userInput = null;
    while(is_null($userInput)){
        echo $msg;
        fscanf(STDIN, "%d\n", $userInput);
        if(is_null($userInput)){
            echo "\n".$err."\n";
        }
    }
    return $userInput;
}

function getValidNumberSequence($base, $msg){
    $userInput = null;
    while(is_null($userInput)){
        echo $msg;
        $userInput = trim(fgets(STDIN));
        
        if( isValidNumberSequence($userInput, $base) ){
            return $userInput;
        }

        $userInput = null;
    }
    return $userInput;
}

function isValidNumberSequence($userInput, $base){
    $userInput = str_split(strtoupper($userInput));
    foreach( $userInput as $digit ){
        $pos = strpos('0123456789ABCDEF', $digit);

        /* If it is not a valid digit */
        if( !is_numeric($pos) ){
            echo 'Not valid digit'."\n";
            return false;
        }
        /* If it is not a valid digit in the specified base */
        if( $pos >= $base ){
            echo 'Digit out of range'."\n";
            return false;
        }
    }
    return true;
}

/**
 * Displays a message, waits for input and clears screen.
 * 
 * @param string $msg
 * @return void
 */
function endMenu($msg = '-- Press Enter To Continue --'){
    echo $msg."\n";
    fgets(STDIN);
    passthru('clear');
}