<?php
/*Write a script that calculates and
displays the discount on a product based on a user-defined price. If the price is above
500, give a 10% discount; otherwise, no discount (use the ternary operator). */

$price = 600; 

// Calculate the discount using the ternary operator
$discount = ($price > 500) ? 0.10 * $price : 0;  

// Calculate the final price after discount
$finalPrice = $price - $discount;

// Display the result
echo "Original Price: " . $price . "<br>";
echo "Discount:" . $discount . "<br>";
echo "Final Price after Discount:" . $finalPrice . "<br>";

?>
