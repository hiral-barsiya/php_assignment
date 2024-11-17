<?php
/* Define arrays in PHP. What are the different types of arrays ?
   ans. 
   Arrays are used to store multiple values in a single variable.
   example:$arr =array(1, 2, 3, "Hello", "World");

   =>Types of array in php :
   1.Indexed Arrays :These arrays use numeric indexes.
        example :
        $colors = ["Red", "Green", "Blue"];
        echo $colors[0]; 


   2.Associative Arrays :These arrays use named strings to index values.
        example:
        $person = [
        "first_name" => "John",
        "last_name" => "Doe",
        "age" => 30
        ];
        echo $person["first_name"]; // Outputs "John"


   3.Multidimensional Arrays :These arrays contain one or more arrays inside them, allowing for a matrix-like structure.
        example:
        $matrix = [
        ["Apple", "Banana", "Cherry"],
        ["Tomato", "Potato", "Carrot"]
        ];
        echo $matrix[0][1]; // Outputs "Banana"


*/
?>