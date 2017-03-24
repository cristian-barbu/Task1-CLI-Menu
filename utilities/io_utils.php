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