<?php
if (isset($_GET['submit'])) {
    $name = $_GET['name'];
    $email = $_GET['email'];

    echo "<h3>GET Method Data:</h3>";
    echo "Name: " . $name. "<br>";
    echo "Email: " . $email . "<br>";
} else {
    echo "No data received.";
}
?>
