<?php

/*Explain what PHP expressions are and give examples of arithmetic and logical
operations.

ans:
Expressions are combinations of values, variables, operators, and functions that are evaluated to produce a value.
*/

//Examples of Arithmetic Operations:

// Addition
$sum = 5 + 3; 

// Subtraction
$difference = 10 - 4; 

// Multiplication
$Multiplication = 7 * 2;

// Division
$Division = 20 / 4; 

// Modulus
$remainder = 9 % 4;

echo "Sum: $sum, Difference: $difference, multiplication: $Multiplication, division: $Division, Remainder: $remainder";

echo "<br>";


//Examples of logical Operations:


// AND operator
$andResult = (true && false);

// OR operator
$orResult = (true || false); 



// Convert boolean values to strings for display
$andResultStr = $andResult ? 'true' : 'false';
$orResultStr = $orResult ? 'true' : 'false';

echo "AND Result: " . $andResultStr . ", OR Result: " . $orResultStr . "";

?>