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
    <style>
        p {
            padding-left: 50px;
        }

        h1 {
            padding-left: 50px;
        }

        .button {
            display: inline-flex;
            width: 115px;
            height: 25px;
            background: #94C973;
            padding: 10px;
            text-align: center;
            border-radius: 5px;
            color: black;
            line-height: 25px;
            margin-right: 10px;
            margin-left: 20px
        }

        .button-group {
            display: inline-block;
        }
    </style>
</head>

<body>
    <h1>Welkom <?php echo $voornaam . " " . $achternaam; ?>!</h1>
    <p><strong>Adres:</strong> <?php echo $adres; ?></p>
    <p><strong>ID:</strong> <?php echo $id; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>
    <div class="button-group">
        <a class="button" href="logout.php" style="text-decoration:none">Uitloggen</a>
        <a class="button" href="delete.php" style="text-decoration:none">Delete</a>
        <a class="button" href="editself.php?id=<?php echo $id ?>" style=" text-decoration:none">bewerk</a>
    </div>
</body>

</html>