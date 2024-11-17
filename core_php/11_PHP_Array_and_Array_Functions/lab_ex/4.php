<?php
/*4. Write a script to shift all zero values to the bottom of an array. */

// Original array
$array = [1, 0, 2, 0, 3, 4, 0, 5, 6];

$nonZeros = [];
$zeros = [];

foreach ($array as $value) {

    if ($value === 0) {
        $zeros[] = $value;
    } else {
        $nonZeros[] = $value;
    }
}

$result = array_merge($nonZeros, $zeros);

print_r($result);
?>
