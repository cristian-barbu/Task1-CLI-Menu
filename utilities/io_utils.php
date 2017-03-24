<?php

function getValidIngeterInput($msg = 'Please type a number: ', $errMsg = 'That was not a number'){

    $userInput == null;
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