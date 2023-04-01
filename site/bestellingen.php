<?php
require 'database.php';
include 'employeenav.php';
$stmt = $conn->prepare("SELECT u.*, b.*, bc.*
FROM user u
INNER JOIN bestelling b ON b.user_id = u.id
INNER JOIN bestelling_content bc ON bc.order_id = b.id");
$stmt->execute();

echo "<table>";
echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>role</th></tr>";

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['id']) . "</a></td>";
    echo "<td><a href='orderinfo.php?id=" . htmlspecialchars($row['id']) . "'>" . htmlspecialchars($row['firstname']) . ' ' . htmlspecialchars($row['lastname']) . "</a></td>";
    echo "<td>" . htmlspecialchars($row['adress']) . "</td>";
    echo "<td>";
    echo "</td>";
    echo "</tr>";
}

echo "</table>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>
<style>
    /* Define the style for the table */
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        text-align: left;
        padding: 8px;
    }

    th {
        background-color: green;
        color: white;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }

    .btn-edit {
        background-color: #28a745;
        color: white;
    }

    .btn-delete {
        background-color: #dc3545;
        color: white;
    }
</style>