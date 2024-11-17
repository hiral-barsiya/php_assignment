<?php
/* Write a script that declares variables of different types and converts
them into other types (e.g., integer to float, string to integer). Display the type and
value before and after the conversion. */

// Declare variables of different types
$intVar = 42;              // Integer
$floatVar = 3.14159;       // Float
$stringVar = "123";        // String
$boolVar = true;           // Boolean

// Display original types and values
echo "Original Variables:<br>";
echo "intVar (type: " . gettype($intVar) . "): $intVar<br>";
echo "floatVar (type: " . gettype($floatVar) . "): $floatVar<br>";
echo "stringVar (type: " . gettype($stringVar) . "): $stringVar<br>";
echo "boolVar (type: " . gettype($boolVar) . "): $boolVar<br><br>";

// Convert types and display results

// Convert integer to float
$intToFloat = (float)$intVar;
echo "Converted intVar to float: (type: " . gettype($intToFloat) . ") $intToFloat<br>";

// Convert float to integer
$floatToInt = (int)$floatVar;
echo "Converted floatVar to int: (type: " . gettype($floatToInt) . ") $floatToInt<br>";

// Convert string to integer
$stringToInt = (int)$stringVar;
echo "Converted stringVar to int: (type: " . gettype($stringToInt) . ") $stringToInt<br>";

// Convert boolean to integer
$boolToInt = (int)$boolVar;
echo "Converted boolVar to int: (type: " . gettype($boolToInt) . ") $boolToInt<br>";

// Convert string to float
$stringToFloat = (float)$stringVar;
echo "Converted stringVar to float: (type: " . gettype($stringToFloat) . ") $stringToFloat<br>";

// Convert float to string
$floatToString = (string)$floatVar;
echo "Converted floatVar to string: (type: " . gettype($floatToString) . ") $floatToString<br>";

// Convert integer to boolean
$intToBool = (bool)$intVar;
echo "Converted intVar to bool: (type: " . gettype($intToBool) . ") $intToBool<br>";

?>
