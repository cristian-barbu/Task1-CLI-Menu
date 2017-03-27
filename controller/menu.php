<?php

/**
 * Displays a command line menu and interprets the user input
 * 
 * @param array $options - an array of function descriptions to be displayed to the user;
 * @param array $handlers - List of (hopefully) declared function names; Their index, the description index in $options, and the number the user will press to call this function, will be the same; 
 * @param string $welcomeMessage - the message to display when asking for input
 * @param string $inputPrompt - display before input
 * @param string $inputError - Error message for when input is not a number
 * @param string $inputRangeError - Error message for when a invalid option is chosen
 * @return void
 */

function runMenu(array $options, array $handlers, $welcomeMessage = "Chose something", $inputPrompt = ">> ", $exitMessage = 'Exit', $inputError = "Invalid input\n", $inputRangeError="Plese select a valid option\n"){
    $numberOfOptions = count($options);
    //Save all the messages to be displaied in a single variable for convenience;
    $displayMessage = makeMenu($welcomeMessage, $options, $numberOfOptions, $exitMessage, $inputPrompt);

    //As long as the user does not chose to exit    
    while(true) {
        //Display the initial message, and ask for input
        echo $displayMessage;
        fscanf(STDIN, "%d\n", $userInput); 
        passthru("clear");
        
        //End iteration, If the input is not a number, and print InputError message;
        if(is_null($userInput)){
            echo "$inputError\n";
            continue;
        }
        //End iteration, If the input is out of the range of options, and print OutOfRange error message
        if($userInput < 0 || $userInput > $numberOfOptions){
            echo "$inputRangeError\n";
            continue;
        }
        //End the loop, If the user choses the "Exit" option
        if($userInput == $numberOfOptions){
            break;
        }

        /* Call the handler for the chosen input (handlers given as arguments when the menu is called)*/
        call_user_func($handlers[$userInput]);
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
function makeMenu($welcomeMessage, $options, $numberOfOptions, $exitMessage, $inputPrompt){
    $displayMessage = $welcomeMessage."\n";
    foreach ($options as $index => $option){
        $displayMessage .= "[$index] $option\n";
    }
    $displayMessage.= "[$numberOfOptions] $exitMessage\n";
    $displayMessage.= $inputPrompt;
    return $displayMessage;
}
?>