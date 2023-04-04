<?php
require 'database.php';
$status = $_POST['status'];
$id = $_GET['id'];

// Then, prepare and execute an SQL statement that updates the database column
$sql = "UPDATE bestelling SET status = :status WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindValue(':status', $status);
$stmt->bindValue(':id', $id); // Replace $id with the appropriate ID value
$stmt->execute();
header('location: bestellingen.php');
    ?>