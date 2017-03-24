<?php

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


/**
 * Convert a number sequence, representing a number in a certain base, into a decimal
 * 
 * @param string $number_string
 * @param int $base
 * @return int
 */
function convertToDecimal($number_string, $base){
    /* Map an integer equivalent to each character in the sequence */
    $dec_array = array_map('mapToDec',str_split(strrev($number_string)));
    
    $result = 0;
    $pow = 1;
    foreach($dec_array as $digit){
        $result += $pow * $digit;
        $pow *= $base;
    }
    return $result;
}

/**
 * Map a symbol to a base 10 value
 * 
 * @param string $symbol
 * @return int
 */
function mapToDec($symbol){
    $pos = strpos('0123456789ABCDEF', strtoupper($symbol));
    
    /* Return null if not a valid symbol */
    if( !is_numeric($pos) ){
        return null;
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
   while ( $number != 0 )
    {
       $remainder = $number % $base;
       $number = floor($number / $base);  
       $digits[$index] = $remainder;
       $index++;
    }
    $digits = strrev(implode(array_map('mapFromDec', $digits)));

    //maybe check for null values

    return $digits;
}

/**
 * Map a decimal value into an appropriat symbol
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
