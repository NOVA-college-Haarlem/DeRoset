<?php
include 'employeenav.php';
require 'database.php';
$stmt = $conn->prepare("SELECT * FROM ice_cream ORDER BY flavor asc");
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$flavor = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Product List</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<style>
    body {
        font-family: Arial, sans-serif;
    }

    h1 {
        text-align: center;
    }

    .bleh {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .gey {
        width: calc(20% - 20px);
        margin-bottom: 20px;
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        padding: 20px;
        box-sizing: border-box;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
    }

    h2 {
        margin-top: 0;
    }

    p {
        margin: 0;
    }

    .my-link-button {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        font-weight: bold;
        color: #fff;
        background-color: #4CAF50;
        border: none;
        border-radius: 4px;
        text-decoration: none;
        cursor: pointer;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
    }

    .my-link-button:hover {
        background-color: #3e8e41;
    }

    .my-link-button:active {
        background-color: #1f6b25;
    }
</style>
<h1>Product List</h1>
<ul class="bleh">
    <?php
    // assume $products is an array of product information
    foreach ($flavor as $flavor) {
        echo "<li class='gey'>";
        echo "<a style='color: black;text-decoration: none;'href='editproduct.php?id=$flavor[id]'><h2>" . $flavor['flavor'] . "</h2> </a>";
        echo "<p>" . $flavor['description'] . "</p>";
        echo "<p>Price: €" . $flavor['price'] . "</p>";
        echo "</li>";
    }
    ?>
</ul>

<body> <a href="newproduct.php" class="my-link-button"> Nieuw product <a>

</body>

</html>