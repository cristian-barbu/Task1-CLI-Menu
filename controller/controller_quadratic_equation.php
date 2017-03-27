<?php

//require_once '../utilities/io_utils.php';
//require_once '../utilities/quadratic_equation.php'

function handleQuadraticEquation() {
    echo 'This will solve the equation a*x^2 + b*x + c = 0'."\n";
    
    //read the coeficients
    while(true){
        $a = getValidIngeterInput('Give the coeficient of x^2: ');
        if($a != 0){
            break;
        }
        echo 'The coeficient for x^2 cannot be 0'."\n";
    }
    $b = getValidIngeterInput('Give the coeficient of x: ');
    $c = getValidIngeterInput('Give the constant: ');

    $result = solveQuadraticEquation($a, $b, $c);
        
    // print the result
    printQuadricResult($result);
    
    endMenu();
}

/**
 * Interpret the solution of the quadratic equation and print a relevant message
 * 
 * @param array $result
 * @return void
 */
function printQuadricResult($result){
    if(is_null($result) || count($result)==0){
        echo 'There is no solution'."\n";
        return;
    }
    if(count($result) == 1){
        printf("There is a single solution: %f\n", $result[0]);
        return;
    }
    if(count($result) == 2){
        printf("The solutions are: [%f, %f]\n", $result[0], $result[1]);
        return;
    }
}