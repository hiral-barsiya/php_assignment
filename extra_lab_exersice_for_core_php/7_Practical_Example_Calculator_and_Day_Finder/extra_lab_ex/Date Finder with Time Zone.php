<?php
/*Write a script that finds the current day and prints
"Happy Sunday" if it's Sunday, but also adjusts for different time zones." */

// Get the current day of the week in full textual format 
$currentDay = date('l');

// Display the current day
echo "Happy " . $currentDay. "<br>";


date_default_timezone_set("Asia/Calcutta");
echo "current time in Asia/Calcutta :".date("H:i:s a")."<br>";

date_default_timezone_set("Europe/London");
echo "current time in Europe/London :".date("H:i:s a")."<br>";

date_default_timezone_set("Asia/Tokyo");
echo "current time in Asia/Calcutta :".date("H:i:s a")."<br>";

date_default_timezone_set("Australia/Sydney");
echo "current time in Australia/Sydney :".date("H:i:s a")."<br>";


?>