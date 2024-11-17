<?php
/*Create a calculator using if-else conditions that takes two inputs
and an operator (+, -, *, /). */


$num1 = 10;  // First number )
$num2 = 5;   // Second number )
$operator = '+';  // Operator , e.g., '+', '-', '*', '/')

//  calculation using if-else conditions
if ($operator == '+')
{
    $result = $num1 + $num2;
    echo "addition is: " . $result;
} 

elseif ($operator == '-') 
{
    $result = $num1 - $num2;
    echo "subtraction is: " . $result;
}

elseif ($operator == '*') 
{
    $result = $num1 * $num2;
    echo "multiplication is: " . $result;
}

elseif ($operator == '/') 
{
        $result = $num1 / $num2;
        echo "division is: " . $result;
}

else
{
    echo "Invalid operator. Please use one of: +, -, *, /.";
}

?>