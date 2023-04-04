<?php
session_start();
require 'database.php';
$id = $_GET['id'];
$stmt = $conn->prepare("DELETE FROM bestelling WHERE id = $id");
$stmt->execute();

header('location:bestellingen.php');
 