
<?php

// Loop through numbers from 1 to 100
for ($i = 1; $i <= 100; $i++) {

    // Check if the number is divisible by both 3 and 5
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz<br>";
    }
    // Check if the number is divisible by 3
    elseif ($i % 3 == 0) {
        echo "Fizz<br>";
    }
    // Check if the number is divisible by 5
    elseif ($i % 5 == 0) {
        echo "Buzz<br>";
    }
    // If the number is not divisible by 3 or 5, just print the number
    else {
        echo $i . "<br>";
    }
}

?>
