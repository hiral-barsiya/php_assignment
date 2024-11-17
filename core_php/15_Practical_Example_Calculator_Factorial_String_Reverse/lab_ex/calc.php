<?php
//Create a calculator using user-defined functions.

// Function for addition
function add($a, $b) {
    return $a + $b;
}

// Function for subtraction
function subtract($a, $b) {
    return $a - $b;
}

// Function for multiplication
function multiply($a, $b) {
    return $a * $b;
}

// Function for division
function divide($a, $b) {
    return $a / $b;
}

// User input values
$num1 = 10;
$num2 = 5;

echo "Addition: " . add($num1, $num2) . "<br>";
echo "Subtraction: " . subtract($num1, $num2) . "<br>";
echo "Multiplication: " . multiply($num1, $num2) . "<br>";
echo "Division: " . divide($num1, $num2) . "<br>";
?>
