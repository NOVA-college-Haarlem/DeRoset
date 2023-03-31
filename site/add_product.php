<?php
require 'database.php';
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$brand = $_POST['brand'];
$image = $_POST['image'];


// insert the new product into the database
$stmt = $conn->prepare("INSERT INTO ice_cream (flavor, description, price, brand, image) VALUES ('$name', '$description', '$price','$brand','$image')");
$stmt->execute();
header('location: producten.php');
