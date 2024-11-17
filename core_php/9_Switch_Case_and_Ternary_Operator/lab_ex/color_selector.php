<?php
/* Write a program to display the name of a color based on user input
(red, green, blue).*/

$color = "blue";  // For example, you can change this to "red", "green", etc.

// Use a switch statement to display the color name
switch ($color) {
    case 'red':
        echo "The color is Red.";
        break;
    case 'green':
        echo "The color is Green.";
        break;
    case 'blue':
        echo "The color is Blue.";
        break;
    default:
        echo "Invalid color input. Please enter red, green, or blue.";
        break;
}

?>