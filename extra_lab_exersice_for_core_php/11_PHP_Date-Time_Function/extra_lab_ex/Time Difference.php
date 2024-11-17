<?php

/* Write a script that calculates the time difference between two dates
(e.g., "today" and "next birthday"). */

function calTimeDiff($futureDate) {
    // today's date
    $today = new DateTime("today");

    $nextBirthday = new DateTime($futureDate);

    $interval = $today->diff($nextBirthday);

    // Display the difference
    echo "Time difference between today and your next birthday:<br>";
    echo "Years: " . $interval->y . "<br>";
    echo "Months: " . $interval->m . "<br>";
    echo "Days: " . $interval->d . "<br>";
}

$nextBirthday = "2025-01-15";  // Example next birthday date

calTimeDiff($nextBirthday);

?>
