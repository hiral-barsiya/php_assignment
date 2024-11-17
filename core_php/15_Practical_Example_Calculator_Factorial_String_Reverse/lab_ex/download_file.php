<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download File</title>
</head>
<body>

<h2>Download File</h2>
<form method="post" action="">
    <button type="submit" name="download">Download File</button>
</form>

<?php
if (isset($_POST['download'])) {
    $file = 'factorial.php'; // Path to the file to be downloaded

    // Check if the file exists
    if (file_exists($file)) {
        // Provide a link to download the file
        echo '<a href="' . $file . '" download>Click here to download the file</a>';
    } else {
        echo "File not found.";
    }
}
?>

</body>
</html>
