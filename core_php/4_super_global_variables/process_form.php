<?php
if (isset($_POST['submit'])) {

    $name = ($_POST['name']);
    $email = ($_POST['email']);

    echo "<h2>Your Submitted Information</h2>";
    echo "<p><strong>Name:</strong> " . $name . "</p>";
    echo "<p><strong>Email:</strong> " . $email . "</p>";
} else {
    echo "<p>No data received.</p>";
}
?>

