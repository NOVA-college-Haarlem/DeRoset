<!DOCTYPE html>
<?php
require 'database.php';
$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM ice_cream WHERE id = $id");
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$flavor = $stmt->fetch();
?>
<html lang="en">
<style>
    .container {
        text-align: center;
        margin: auto;
        width: 50%;
        padding: 20px;
    }

    img {
        width: 75%;
        height: auto;
        border-radius: 10px;
        margin-bottom: 20px; 
    }

    h1 {
        font-size: 36px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    p {
        font-size: 18px;
        line-height: 1.5;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $flavor['flavor'] ?></title>
</head>

<body>
    <div class="container">
        <img src="<? echo $flavor['image'] ?>" alt="Ice Cream Flavor">
        <h1> <?php echo $flavor['flavor'] ?></h1>
        <p> <?php echo $flavor['description'] ?> </p>
        <p> €<?php echo $flavor['price']; ?>/L </p>
    </div>
</body>

</html>