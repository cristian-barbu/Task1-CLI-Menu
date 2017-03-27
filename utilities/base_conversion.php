<?php
/**
 * Convert a number sequence, representing a number in a certain base, into a decimal
 * 
 * @param string $number_string - sequence of characters representing a number in a certain base
 * @param int $base
 * @return int
 */
function convertToDecimal($number_string, $base){
    
    /* Go through number sequence, and assign a decimal value to each 
        digit; Save the values into an array.
     */
    $dec_array = array_map('mapToDec',str_split(strrev($number_string)));
    
    $result = 0;
    $pow = 1; 
    foreach($dec_array as $digit){
        /* At each step i, multiply the value of the current digit by base raised to the power i, and add it to the result */ 
        $result += $pow * $digit;
        $pow *= $base;
    }
    return $result;
}

/**
 * Given a digit in any base up to 16, return the decimal value of that digit
 * 
 * @param string $symbol
 * @return int
 */
function mapToDec($symbol){
    $pos = strpos('0123456789ABCDEF', strtoupper($symbol));
    
    /* Return null if not a valid symbol */
    if( !is_numeric($pos) ){
        return null; //Because we don't know how to throw exceptions yet
    }

    return $pos;
}

/**
 * Convert a decimal number into a number sequence, representing a number in some base 
 * 
 * @param int $number
 * @param int $base
 * @return string
 */
function convertFromDecimal($number, $base){
   $index = 0;
   $digits = [];
   /* Divide the decimal number by the base and save the remainder; Repeat untill the number is 0 */
   while ( $number != 0 )
    {
       $remainder = $number % $base;
       $number = floor($number / $base);  
       $digits[$index] = $remainder;
       $index++;
    }
    /* The number in the new base will be the previously obtained array of remainders, in reverse order */
    $digits = strrev(implode(array_map('mapFromDec', $digits)));

    return $digits;
}

/**
 * Map a decimal value to an appropriate symbol
 * 
 * @param int $digit
 * @return void
 */
function mapFromDec($digit){
    if ($digit < 0 || $digit > 15){
        return null;
    }
    $symbols = '0123456789ABCDEF';
    return $symbols[$digit];
}


/**
 * Convert binary string into a number
 * 
 * Returns null if the string contains characters other than '0' and '1'
 * 
 * @param string $bin_string
 * @return int
 */
function binaryToDecimal($bin_string){
    return convertToDecimal($bin_string, 2);
}

/**
 * Convert the number into a binary string
 * 
 * Note: Ignores the sign of the number
 * @param int $number
 * @return string
 */
function decimalToBinary($number){
    return convertFromDecimal($number, 2);
}

/**
 * Convert a hexadecimal sequence to a decimal number
 * 
 * @param string $hex_string
 * @return int
 */
function hexToDecimal($hex_string){
    return convertToDecimal($hex_string, 16);
}


/**
 * Converts a number from decimal to a hexadecimal sequence
 * 
 * @param int $number
 * @return string
 */
function decimalToHex($number){
    return convertFromDecimal($number, 16);
}

