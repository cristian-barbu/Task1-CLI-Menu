<?php

/**
 * Displays a command line menu and interprets the user input
 * 
 * @param array $options - an array of options
 * @param string $welcomeMessage - the message to display when asking for input
 * @param string $inputPrompt - display before input
 * @param string $inputError - Error message for when input is not a number
 * @param string $inputRangeError - Error message for when a invalid option is chosen
 * @return void
 */

function runMenu(array $options, array $handlers, $welcomeMessage = "Chose something", $inputPrompt = ">> ", $inputError = "Invalid input\n", $inputRangeError="Plese select a valid option\n"){
    $numberOfOptions = count($options);
    
    $displayMessage = makeMenu($welcomeMessage, $options, $numberOfOptions, $inputPrompt);
        
    while(true) {
        echo $displayMessage;
        fscanf(STDIN, "%d\n", $userInput); 
        passthru("clear");
        
        if(is_null($userInput)){
            echo "$inputError\n";
            continue;
        }

        if($userInput < 0 || $userInput > $numberOfOptions){
            echo "$inputRangeError\n";
            continue;
        }

        if($userInput == $numberOfOptions){
            break;
        }

        /* Call the handler for the chosen input */
        call_user_func($handlers[$userInput]);

        //echo "TODO: Implement function call for input $userInput\n";
        
        
    }
    
}

/**
 * Returns a printable version of the menu
 * 
 * @param string $welcomeMessage
 * @param string $options
 * @param string $numberOfOptions
 * @param string $inputPrompt
 * @return string
 */
function makeMenu($welcomeMessage, $options, $numberOfOptions, $inputPrompt){
    $displayMessage = $welcomeMessage."\n";
    foreach ($options as $index => $option){
        $displayMessage .= "[$index] $option\n";
    }
    $displayMessage.= "[$numberOfOptions] Exit\n";
    $displayMessage.= $inputPrompt;
    return $displayMessage;
}

    /*
$line = trim(fgets(STDIN)); // reads one line from STDIN
fscanf(STDIN, "%d\n", $number); // reads number from STDIN
    */

?>