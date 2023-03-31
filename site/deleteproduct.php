<?php 
require 'database.php';
$id = $_GET['id'];
$stmt = $conn->prepare("DELETE FROM ice_cream WHERE id = '$id'");
$stmt->execute();
