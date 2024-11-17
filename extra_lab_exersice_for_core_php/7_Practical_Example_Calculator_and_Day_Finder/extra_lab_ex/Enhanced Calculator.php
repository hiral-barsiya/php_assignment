<?php
/* Modify the calculator to handle more complex operations
such as exponentiation (^), modulus (%), and square root (√). */

$num1 = 10;  // First number
$num2 = 5;   // Second number
$operator = '^';  // Operator, e.g., '+', '-', '*', '/', '^', '%', '√'

// Calculation using if-else conditions
if ($operator == '+') {
    $result = $num1 + $num2;
    echo "Addition result: " . $result . "\n";
} 
elseif ($operator == '-') {
    $result = $num1 - $num2;
    echo "Subtraction result: " . $result . "\n";
}
elseif ($operator == '*') {
    $result = $num1 * $num2;
    echo "Multiplication result: " . $result . "\n";
}
elseif ($operator == '/') {
    // Check for division by zero
    if ($num2 == 0) {
        echo "Error: Division by zero is not allowed.\n";
    } else {
        $result = $num1 / $num2;
        echo "Division result: " . $result . "\n";
    }
}
elseif ($operator == '^') {
    $result = pow($num1, $num2);
    echo "Exponentiation result: " . $result . "\n";
}
elseif ($operator == '%') {
    // Modulus operation (remainder of division)
    $result = $num1 % $num2;
    echo "Modulus result: " . $result . "\n";
}
elseif ($operator == '√') {
    // Square root operation (only applies to num1)
    if ($num1 < 0) {
        echo "Error: Cannot compute the square root of a negative number.\n";
    } else {
        $result = sqrt($num1);
        echo "Square root result: " . $result . "\n";
    }
} else {
    echo "Invalid operator. Please use one of: +, -, *, /, ^, %, √.\n";
}
?>
