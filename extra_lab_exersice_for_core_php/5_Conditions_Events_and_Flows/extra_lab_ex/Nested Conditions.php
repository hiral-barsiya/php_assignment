

<?php

/*Write a script that uses nested if-else conditions to categorize a
number as positive, negative, or zero, and also check if it's an even or odd number. */

function categorizeNumber($number) {
    // Check if the number is positive, negative, or zero
    if ($number > 0) {
        // Number is positive
        echo "$number is a positive number.\n";
        
        // Nested condition to check if the positive number is even or odd
        if ($number % 2 == 0) {
            echo "$number is also an even number.\n";
        } else {
            echo "$number is also an odd number.\n";
        }
    } elseif ($number < 0) {
        // Number is negative
        echo "$number is a negative number.\n";
        
        // Nested condition to check if the negative number is even or odd
        if ($number % 2 == 0) {
            echo "$number is also an even number.\n";
        } else {
            echo "$number is also an odd number.\n";
        }
    } else {
        // Number is zero
        echo "The number is zero.\n";
    }
}

// Example usage
$number = -3;
categorizeNumber($number);
?>
