<?php
/*Demonstrate the use of variable variables in PHP. Write a script
where a variable name is stored in another variable, and then use it to print the value.*/

// Step 1: Define a variable that will hold the name of another variable
$variableName = "greeting";

// Step 2: Define the variable whose name is stored in $variableName
$$variableName = "Hello, World!";

echo $$variableName;  

echo "<br>" . $greeting;  

?>