<?php
/*Write a recursive and non-recursive function to calculate the
factorial of a number. Compare their performance for large numbers. */

function factorial($n) {

  if ($n <= 1) {
        return 1;
    }

    return $n * factorial($n - 1);
}

$number = 5;
echo "The factorial of " . $number . " is " . factorial($number) . ".";
?>
