<?php
/* Write a PHP program that accepts a student’s marks and outputs
their grade using if-else conditions (A, B, C, D, Fail based on score). */


function getGrade($marks) {
    if ($marks >= 90 && $marks <= 100) {
        return "A";
    } elseif ($marks >= 80 && $marks < 90) {
        return "B";
    } elseif ($marks >= 70 && $marks < 80) {
        return "C";
    } elseif ($marks >= 60 && $marks < 70) {
        return "D";
    } else {
        return "Fail";
    }
}

// Example usage
$studentMarks = 85;
$grade = getGrade($studentMarks);
echo "The grade for a student who scored " . $studentMarks . " marks is: " . $grade . ".";

?>
