<?php/*Write a script to display various details of the server environment using
$_SERVER (like PHP_SELF, SERVER_NAME, HTTP_USER_AGENT, etc.).*/?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Environment Details</title>
</head>
<body>

<h2>Server Environment Details</h2>
<ul>
    <li><strong>PHP Self:</strong> <?php echo $_SERVER['PHP_SELF']; ?></li>
    <li><strong>Server Name:</strong> <?php echo $_SERVER['SERVER_NAME']; ?></li>
    <li><strong>HTTP Host:</strong> <?php echo $_SERVER['HTTP_HOST']; ?></li>
    <li><strong>HTTP User Agent:</strong> <?php echo $_SERVER['HTTP_USER_AGENT']; ?></li>
    <li><strong>Request Method:</strong> <?php echo $_SERVER['REQUEST_METHOD']; ?></li>
    <li><strong>Query String:</strong> <?php echo $_SERVER['QUERY_STRING']; ?></li>
</ul>

</body>
</html>
