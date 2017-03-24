<?php
//require_once '../utilities/io_utils.php';
//require_once '../utilities/square_root.php';

function handleSquareRoot() {

    $number = getValidIngeterInput("Give the number: ");
    $result = getSquareRoot($number);
    printf("The square root of %d is %f\n", $number, $result);

    endMenu();
}