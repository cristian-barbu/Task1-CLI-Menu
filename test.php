<?php 
    // fscanf(STDIN, "%d\n", $number); // reads number from STDIN
    // if(is_null($number)){
    //     echo "Close\n";
    // }
    // echo "You gave me $number\n";
    
    // include "./utilities/squareRoot.php";
    // for($i=0; $i <19; $i++){
    //     $a = square_root(1, $i);
    //     echo "$i >> $a\n";
    // }

    // include "./utilities/gratestCummonDivisor.php";
    // for($i = 4; $i < 50; $i += 6){
    //     $a = gcd($i, $i+8);
    //     echo "$i > $a\n";
    // }

    // include "./utilities/leastCummonMultiple.php";
    // for ($i=0; $i < 10; $i++){
    //     $a = lcm($i, $i+1);
    //     echo "$i > $a\n";
    // }

    // $a = floor(1243128 / 10);
    // echo "$a\n";

    // include "./utilities/baseConversion.php";
    // for($i = 0; $i<16;$i++){
    //     $a = binary_to_decimal($i);
    //     echo "$i > $a";
    // }
    
    // printf("%1b\n",256); Easy binary

    // $a = "gopnik";
    // foreach(str_split(strrev($a)) as $chr){
    //     echo "$chr\n";
    // }
    
    // $a = '0';
    // if($a == "0"){
    //     echo "good";
    // }
    // echo " job\n";

    //include "./utilities/base_conversion.php";
    // $a = binaryToDecimal("11011001");
    // echo "$a\n";
    // for($i=0;$i < 16; $i++){
    //     $a = decimalToBinary($i);
    //     echo "$i > $a\n";
    // }
    // for($i=0;$i < 16; $i++){
    //     $a = decimalToHex($i);
    //     echo "$i > $a\n";
    // }
    // $a = decimal_to_hex(124123);
    // echo "$a\n";
    // $a = hexToDecimal("AE93F");
    // echo "$a\n";

    // include './utilities/quadratic_equation.php';
    // $a = solveQuadraticEquation(1, 2, 1); // -1
    // $a = solveQuadraticEquation(1, -1, -6);
    // echo var_dump($a);

    // include './utilities/add_fractions.php';
    // $a = addFractions([1,1,1,1],[4,4,4,4]);//should return [1]
    // $a = addFractions([1,2,1,1],[4,4,4,4]);//should return [5,4]
    // $a = addFractions([1,2,3,4],[2,6,4,8]); //should return [307, 210]
    // echo var_dump($a); 

    // $a = (int)"6php7";
    // echo "$a\n";
    // $a = 4 + 0b1001;
    // echo "$a\n"; //prints 13
   
    // $a = [0,1,1,0,1,1];
    // $a = implode($a);
    // echo "$a\n";

    // $number = null;
    // fscanf(STDIN, "%d\n", $number); // reads number from STDIN
    // if (is_null($number)){
    //     echo ' good';
    // }
    // echo ' job\n'.$number."\n";

    //var_dump( $_SERVER['DOCUMENT_ROOT']);

    /*
$line = trim(fgets(STDIN)); // reads one line from STDIN
fscanf(STDIN, "%d\n", $number); // reads number from STDIN
    */
    $a = 7;
    $b = 4;
    list($a, $b) = [$b, $a%$b ];
    echo "$a $b\n";
?>

