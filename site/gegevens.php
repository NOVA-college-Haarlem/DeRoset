<?php
require 'database.php';
include 'nav.php';

$id = $_SESSION['user_id'];

$stmt = $conn->prepare("SELECT * FROM user WHERE id = $id");
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$user = $stmt->fetch();

$voornaam = $user["firstname"];
$achternaam = $user["lastname"];
$adres = $user["adress"];
$email = $user['email'];

?>

<!DOCTYPE html>
<html>

<head>
    <title>Mijn Gegevens</title>
</head>
<style>
    p {
        padding-left: 50px;
    }

    h1 {
        padding-left: 50px;
    }

    a {
        padding-left: 50px;
    }

    .button {
        display: block;
        width: 115px;
        height: 25px;
        background: #94C973;
        padding: 10px;
        text-align: center;
        border-radius: 5px;
        color: black;
        line-height: 25px;
        margin-left: 50px;
    }
</style>

<body>
    <h1>Welkom <?php echo $voornaam . " " . $achternaam; ?>!</h1>
    <p><strong>Adres:</strong> <?php echo $adres; ?></p>
    <p><strong>ID:</strong> <?php echo $id; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>
    <a class="button" href="logout.php" style="text-decoration:none">Uitloggen</a> <br>
    <a class="button" href="delete.php" style="text-decoration:none">delete</a>



</body>

</html>