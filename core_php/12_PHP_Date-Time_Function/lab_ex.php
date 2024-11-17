<?php
/*Write a script to display the current date and time in different formats.*/

echo "Today's date is :"."<br>".date("d/m/y")."<br>";
echo "Today's date is :"."<br>".date("d.m.y")."<br>";
echo "Today's date is :"."<br>".date("d-m-y")."<br>";
echo "Today's date is :"."<br>".date("D/M/Y")."<br>";

echo "<br>";
 
date_default_timezone_set("Asia/Calcutta");
echo "current time is :".date("H:i:s a")."<br>";
echo "current time is :".date("h:i:s a");


?>