Create a web page that uses PHP to dynamically
generate HTML content (e.g., a table with user information using PHP).
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Table</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 50px 0;
            font-size: 18px;
            text-align: left;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>User Information Table</h2>

<?php
// Sample user information
$users = [
    ["name" => "hiral", "age" => 25, "email" => "hiral@example.com"],
    ["name" => "devangi", "age" => 30, "email" => "devangi@example.com"],
    ["name" => "parth", "age" => 22, "email" => "parth@example.com"]
];

// Generate table
echo "<table>";
echo "<tr><th>Name</th><th>Age</th><th>Email</th></tr>";

foreach ($users as $user) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($user['name']) . "</td>";
    echo "<td>" . htmlspecialchars($user['age']) . "</td>";
    echo "<td>" . htmlspecialchars($user['email']) . "</td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
