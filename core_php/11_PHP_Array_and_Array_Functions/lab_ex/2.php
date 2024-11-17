<?php
/* 2. Find and display the number of odd and even elements in an array. */
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$evenCount = 0;
$oddCount = 0;

foreach ($array as $value) {

    if ($value % 2 == 0) {
        $evenCount++;
    } else {
        $oddCount++;
    }
}

// Display the results
echo "Even numbers: " . $evenCount . "<br>";
echo "Odd numbers: " . $oddCount . "<br>";

?>
