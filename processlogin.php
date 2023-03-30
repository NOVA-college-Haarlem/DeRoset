<?php

require 'database.php';
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

$result = mysqli_query($conn, $sql);

$user = mysqli_fetch_assoc($result);

if ($result->num_rows == 0) {
    header('Location: login.php?error= Foute gegevens');
} else {
    session_start();
    $_SESSION['logedin'] = true;
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['firstname'] = $user['firstname'];
    $_SESSION['lastname'] = $user['lastname'];
    $_SESSION['address'] = $user['adress'];
    $_SESSION['city'] = $user['city'];
    $_SESSION['role'] = $user['role'];
    $_SESSION['ride_amount'] = $user['ride_amount'];

    if ($_SESSION['role'] == 'employee' || $_SESSION['role'] == 'manager') {
        header('Location: employeedash.php');
    }
    if ($_SESSION['role'] == 'customer') {
        header('Location: loggedin.php');
    }
    if ($_SESSION['role'] == 'driver') {
        header('Location: driverdash.php');
    }
}