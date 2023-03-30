<?php

require 'database.php';

// post de input van de signup form in de database
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];
$is_active = 1;
//verandert variables naar of lowercase of een hoofdletter aan de voorkant
$firstname = ucfirst(strtolower($firstname));
$lastname = ucfirst(strtolower($lastname));
$email = strtolower($email);

$stmt = $conn->prepare("INSERT INTO user (email, password, firstname, lastname, adress, role)
VALUES ('$email', '$password','$firstname', '$lastname', '$address', 'customer')");

$stmt->execute(); 
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$flavor = $stmt->fetchAll();

header('Location: login.php');
