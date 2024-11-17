<?php

// Define a multi-dimensional array to store product information
$products = [
    [
        "name" => "Laptop",
        "price" => 999.99,
        "stock" => 10
    ],
    [
        "name" => "Smartphone",
        "price" => 599.99,
        "stock" => 20
    ],
    [
        "name" => "Headphones",
        "price" => 199.99,
        "stock" => 15
    ],
    [
        "name" => "Smartwatch",
        "price" => 299.99,
        "stock" => 25
    ]
];

echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Product Name</th><th>Price</th><th>Stock</th></tr>";

foreach ($products as $product) {
    echo "<tr>";
    echo "<td>" . $product["name"] . "</td>";
    echo "<td>" .$product["price"] . "</td>"; 
    echo "<td>" . $product["stock"] . "</td>";
    echo "</tr>";
}

echo "</table>";

?>
