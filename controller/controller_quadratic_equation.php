<?php

//require_once '../utilities/io_utils.php';

function handleQuadraticEquation() {
    $numerators = [];
    $denominators = [];

    echo 'How many fractions do you want to add? ';
    $numberOfFractions = getValidIngeterInput(true);

    while($numberOfFractions > 0){
        $fraction = readFraction();
        if(checkFraction($fraction)){
            numerators.push($fraction[0]);
            denominators.push($fraction[0]);            
        }
    }
    endMenu('I am handling quadratic equations');
}