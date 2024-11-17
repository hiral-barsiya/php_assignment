<?php
/*Write a script that finds the current day. If it is Sunday, print "Happy
Sunday." */


// Get the current day of the week in full textual format 
$currentDay = date('l');

// Display the current day
echo "Happy " . $currentDay;

?>