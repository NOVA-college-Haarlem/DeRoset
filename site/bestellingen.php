<?php
require 'database.php';
include 'employeenav.php';

$stmt = $conn->prepare("SELECT u.*, b.*
FROM user u
INNER JOIN bestelling b ON u.id = b.user_id WHERE status = 'aangevraagd'");  

$stmt->execute();

echo "<table>";
echo "<tr><th>ID</th><th>User ID</th><th>Adres</th><th>Status</th><th>annuleer</th></tr>";

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['id']) . "</td>";
    echo "<td><a href='orderinfo.php?id=" . htmlspecialchars($row['id']) . "'>" .  htmlspecialchars($row['firstname']) . ' ' .  htmlspecialchars($row['lastname']); "</a></td>";
    echo "<td>" . htmlspecialchars($row['adress']) . "</td>";
    echo "<td>
            <form method='POST' action='updatestatus.php?id=" . htmlspecialchars($row['id']) . "'>
              <input type='hidden' name='id' value='" . htmlspecialchars($row['id']) . "'>
              <label for='status'>Status:</label>
              <select name='status' id='status'>
                <option value='aangevraagd'>aangevraagd</option>
                <option value='voltooid'>voltooid</option>
              </select>
              <input type='submit' value='Update'>
            </form>
          </td>";
          echo "<td> <a href='deleteorder.php?id=" . htmlspecialchars($row['id']). "'>annuleer</a></td>";
    echo "</tr>";
}

echo "</table>";
?>

<style>
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