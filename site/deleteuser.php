<?php
require 'database.php';
header('location: klanten.php');
$id = $_GET['id'];
$stmt = $conn->prepare("DELETE FROM user WHERE id = :id");
$stmt->execute(['id' => $id]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
