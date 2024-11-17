<?php
function displayMessage($grade)
 {
    switch (strtoupper($grade)) {
        case 'A':
        case 'B':
            echo "Excellent<br>";
            break;
        case 'C':
            echo "Good<br>";
            break;
        case 'D':
            echo "Needs Improvement<br>";
            break;
        case 'F':
            echo "Failed<br>";
            break;
        default:
            echo "Invalid grade<br>";
    }
}

// Example usage
$grade = 'B';
displayMessage($grade);
?>
