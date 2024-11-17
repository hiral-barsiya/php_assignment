<?php
/* Write a PHP program to determine if a numberis even or odd using if conditions.*/

//check condition for even number 
function check($number)
{
    if($number % 2 == 0){
        echo "Even"; 
    }
    else{
        echo "Odd";
    }
}

check(30)

?>