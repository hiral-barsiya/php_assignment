<?php

// Define two arrays for demonstration
$array1 = [1, 2, 3, 4, 5];
$array2 = [4, 5, 6, 7, 8];

// Merge the arrays using array_merge()
$mergedArray = array_merge($array1, $array2);

// Find the difference between the two arrays using array_diff()
$differenceArray = array_diff($array1, $array2);

// Display the merged array
echo "Merged Array:<br>";
print_r($mergedArray);
echo "<br>";

// Display the difference between array1 and array2
echo "Difference between Array1 and Array2 (values in Array1 not in Array2):<br>";
print_r($differenceArray);

?>
