<?php
session_start();
require 'database.php';
$id = $_SESSION['user_id'];
$stmt = $conn->prepare("DELETE FROM user WHERE id = $id");
$stmt->execute();

header('location:logout.php');
