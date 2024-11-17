<?php
// Define the file path
$file_path = 'Template system.php';

// Check if the file exists before including it
if (file_exists($file_path)) {
    require($file_path);
    echo "Critical file has been included successfully!";
} else {
    // Custom error message if the file doesn't exist
    echo "Error: The critical file '$file_path' could not be found. Please check the file path.";
}
?>
