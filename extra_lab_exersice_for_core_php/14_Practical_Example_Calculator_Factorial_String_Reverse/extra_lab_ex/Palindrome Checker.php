<?php

// Function to check if a string is a palindrome
function isPalindrome($str) {

    $cleanedStr = strtolower( $str);
    
    // Reverse the cleaned string
    $reversedStr = strrev($cleanedStr);
    
    // Compare the cleaned string with its reversed version
    if ($cleanedStr === $reversedStr) {
        return true; // The string is a palindrome
    } else {
        return false; // The string is not a palindrome
    }
}

// Test the function
$testString = "madam";
if (isPalindrome($testString)) {
    echo "'$testString' is a palindrome.";
} else {
    echo "'$testString' is not a palindrome.";
}

?>
