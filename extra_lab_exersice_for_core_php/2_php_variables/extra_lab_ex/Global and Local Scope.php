<?php
// Declare a global variable
$globalVar = "I am a global variable";

function testVariables() {
    // Declare a local variable
    $localVar = "I am a local variable";
    
    // Access the global variable using the global keyword
    global $globalVar;
    
    // Display the local variable (only accessible inside this function)
    echo "Inside the function:<br>";
    echo "Local Variable: $localVar<br>";
    echo "Global Variable (accessed inside function): $globalVar<br><br>";
}

// Call the function
testVariables();

// Try to access the local variable outside the function (this will cause an error)
echo "Outside the function:<br>";
echo "Global Variable: $globalVar<br>";  // Accessible globally
// Uncommenting the next line will result in an error:
// echo "Local Variable: $localVar";  // ERROR: Undefined variable $localVar
?>
