<?php

//Reverse a string without using built-in functions.

function reverseString($str) {

    $reversed = '';
    
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }
    
    return $reversed;
}

$string = "Hello, world!";
echo "Original string: " . $string . "<br>";
echo "Reversed string: " . reverseString($string);
?>
