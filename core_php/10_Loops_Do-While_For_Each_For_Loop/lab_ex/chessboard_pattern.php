<?php
//Use a nested loop to create a chessboard pattern (8x8 grid).

// Set the size of the chessboard
$size = 8;

for ($i = 0; $i < $size; $i++) 
{
    for ($j = 0; $j < $size; $j++)
     {
        if (($i + $j) % 2 == 0) {
            // Print a black square 
            echo "<span style='background-color: black; width: 30px; height: 30px; display: inline-block;'></span>";
        } 
        else {
            // Print a white square 
            echo "<span style='background-color: white; width: 30px; height: 30px; display: inline-block;'></span>";
        }
    }
    
    echo "<br>";
}

?>
