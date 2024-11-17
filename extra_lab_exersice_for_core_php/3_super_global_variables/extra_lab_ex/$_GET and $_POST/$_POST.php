<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    echo "<h3>POST Method Data:</h3>";
    echo "Name: " . $name "<br>";
    echo "Email: " . $email. "<br>";
} else {
    echo "No data received.";
}
?>
