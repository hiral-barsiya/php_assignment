<?php
/*Write a PHP script that demonstrates the use of single-line //,
multi-line /* */  //,and inline #  comments */

// This is a single-line comment
echo "Single-line comments use double slashes // <br>";

/*
 This is a multi-line comment
 It can span multiple lines.
 Useful for longer explanations or disabling large blocks of code.
*/
echo "Multi-line comments use /* */ \n";

# This is an inline comment using the hash symbol
echo "Inline comments can use the hash symbol # \n";

// You can also use comments to explain sections of your code
# For example, let's define a function

/* This function returns the square of a number */
function square($num) {
    // Calculate the square
    return $num * $num; // Inline comment to explain the return value
}

# Calling the function
echo "The square of 4 is: " . square(4) . "\n"; // Output the result


?>