<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Form</title>
</head>
<body>

<h2>File Upload Form</h2>
<form method="POST" action="" enctype="multipart/form-data">
    <label for="file">Choose a file to upload:</label>
    <input type="file" id="file" name="file" required><br><br>
    <input type="submit" name="upload" value="Upload">
</form>

<?php
if (isset($_POST['upload'])) {
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        // Get file details
        $fileName = $_FILES['file']['name'];
        $fileSize = $_FILES['file']['size'];
        $fileType = $_FILES['file']['type'];
        $tmpName = $_FILES['file']['tmp_name'];

        // Display file information
        echo "<h3>File Information:</h3>";
        echo "Name: " . $fileName . "<br>";
        echo "Size: " . $fileSize . " bytes<br>";
        echo "Type: " . $fileType . "<br>";
        echo "Temporary Path: " . $tmpName). "<br>";
        
    } else {
        echo "Error: " . $_FILES['file']['error'];
    }
}
?>

</body>
</html>
