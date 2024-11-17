<?php

/* Write a PHP script using a nested for loop to generate a
multiplication table from 1 to 10. */

for ($i = 1; $i <= 10; $i++) {

    for ($j = 1; $j <= 10; $j++) {
        
        echo $i * $j . " ";  
    }
    // New line after each row
    echo "<br>";
}

?>
