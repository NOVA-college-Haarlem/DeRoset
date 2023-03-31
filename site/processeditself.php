<?php
ob_start(); // Start output buffering

include 'nav.php';

if ($_SESSION['role'] == 'customer') {
    header('location: index.php');
} else {
    header('location: producten.php');
}
require 'database.php';
$id = $_GET['id'];
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Update the user data
    $stmt = $conn->prepare("UPDATE user SET firstname = :firstname, lastname = :lastname, adress = :address, email = :email, password = :password WHERE id = :id");
    $stmt->bindValue(':id', $id);
    $stmt->bindValue(':firstname', $firstname);
    $stmt->bindValue(':lastname', $lastname);
    $stmt->bindValue(':address', $address);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':password', $password);
    $stmt->execute();
    ob_end_flush(); // Send output to the browser

}
