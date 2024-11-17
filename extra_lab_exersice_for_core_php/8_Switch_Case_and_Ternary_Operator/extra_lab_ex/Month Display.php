<?php
/*Create a program using switch case that takes a number (1-12) and
displays the corresponding month. */

// Function to display the month based on the number
function getMonth($monthNumber) {
    switch ($monthNumber) {
        case 1:
            return "January";
        case 2:
            return "February";
        case 3:
            return "March";
        case 4:
            return "April";
        case 5:
            return "May";
        case 6:
            return "June";
        case 7:
            return "July";
        case 8:
            return "August";
        case 9:
            return "September";
        case 10:
            return "October";
        case 11:
            return "November";
        case 12:
            return "December";
        default:
            return "Invalid month number! Please enter a number between 1 and 12.";
    }
}

$monthNumber = 5; 

// Display the corresponding month
echo "The month for number $monthNumber is: " . getMonth($monthNumber) . "\n";

?>
