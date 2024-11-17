Experiment with echo, print, and var_dump. Write a script that
outputs different types of data using these functions.

<?php
// Define variables of different types
$string = "Hello, world!";
$integer = 42;
$float = 3.14;
$array = ["apple", "banana", "cherry"];
$associativeArray = ["name" => "Alice", "age" => 25];
$boolean = true;
$nullVar = null;

// Using echo
echo "Using echo:<br>";
echo $string . "<br>"; 
echo $integer . "<br>"; 
echo $float . "<br>"; 
echo "Array: " . $array[0] . ", " . $array[1] . ", " . $array[2] . "<br>"; 
echo "Name: " . $associativeArray["name"] . ", Age: " . $associativeArray["age"] . "<br>"; 
echo "Boolean: " . ($boolean ? "true" : "false") . "<br>"; 
echo "Null: " . ($nullVar === null ? "null" : "not null") . "<br>"; 

// Using print
print "Using print:<br>";
print $string . "<br>"; 
print $integer . "<br>"; 
print $float . "<br>"; 
print "Array: " . $array[0] . ", " . $array[1] . ", " . $array[2] . "<br>"; 
print "Name: " . $associativeArray["name"] . ", Age: " . $associativeArray["age"] . "<br>";
print "Boolean: " . ($boolean ? "true" : "false") . "<br>"; 
print "Null: " . ($nullVar === null ? "null" : "not null") . "<br>"; 

// Using var_dump
echo "Using var_dump:<br>";
var_dump($string)."<br>";
var_dump($integer)."<br>";
var_dump($float)."<br>"; 
var_dump($array)."<br>"; 
var_dump($associativeArray)."<br>";
var_dump($boolean)."<br>";
var_dump($nullVar)."<br>";
?>
