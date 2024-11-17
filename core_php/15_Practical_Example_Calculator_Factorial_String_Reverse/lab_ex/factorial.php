<?php
//Write a function that finds the factorial of a number using recursion.

function factorial($n) {

  if ($n <= 1) {
        return 1;
    }

    return $n * factorial($n - 1);
}

$number = 5;
echo "The factorial of " . $number . " is " . factorial($number) . ".";
?>
