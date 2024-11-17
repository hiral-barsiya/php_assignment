<?php
/*Write a script to perform various string operations like concatenation,substring 
 extraction,and string length determination.*/
 
 // Define strings
$string1 = "Hello, ";
$string2 = "world!";
$string3 = "This is a sample string.";

// String Concatenation
$conString = $string1 . $string2;
echo "Concatenated String: " . $conString . "<br>";

// Substring Extraction
$substring = substr($string3, 10, 6); 
echo "Extracted Substring: " . $substring . "<br>";

// String Length Determination
$stringLength = strlen($string3);
echo "Length of String: " . $string3 . " is " . $stringLength . "<br>";

 ?>