<?php
require 'database.php';
// Retrieve the user ID and data from the form submission
$id = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];

// Update the user data in the database
$stmt = $conn->prepare('UPDATE user SET firstname = :firstname, lastname = :lastname, email = :email WHERE id = :id');
$stmt->execute(['id' => $id, 'firstname' => $firstname, 'lastname' => $lastname, 'email' => $email]);

// Redirect the user to klanten.php
header('Location: klanten.php');
exit();
