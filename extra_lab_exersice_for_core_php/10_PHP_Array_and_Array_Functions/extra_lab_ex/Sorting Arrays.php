<?php
/* Write a script that demonstrates the use of sort(), rsort(),
asort(), and ksort() functions to sort arrays. */

// Original array for demonstration
$array = [3, 1, 4, 1, 5, 9, 2, 6, 5, 3, 5];

// Associative array for asort() and ksort() demonstration
$assocArray = [
    "apple" => 2,
    "banana" => 3,
    "cherry" => 1,
    "date" => 4
];

// 1. Using sort() – Sort the array in ascending order (numeric sort)
$sortedArray = $array;
sort($sortedArray);
echo "Sorted array (ascending) using sort():<br>";
print_r($sortedArray);
echo "<br>";

// 2. Using rsort() – Sort the array in descending order (numeric sort)
$reversedArray = $array;
rsort($reversedArray);
echo "Sorted array (descending) using rsort():<br>";
print_r($reversedArray);
echo "<br>";

// 3. Using asort() – Sort the associative array in ascending order by values
$assocArrayForAsort = $assocArray;
asort($assocArrayForAsort);
echo "Associative array sorted by values (ascending) using asort():<br>";
print_r($assocArrayForAsort);
echo "<br>";

// 4. Using ksort() – Sort the associative array in ascending order by keys
$assocArrayForKsort = $assocArray;
ksort($assocArrayForKsort);
echo "Associative array sorted by keys (ascending) using ksort():<br>";
print_r($assocArrayForKsort);
echo "<br>";

?>
