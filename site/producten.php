<?php
include 'employeenav.php';
require 'database.php';
$stmt = $conn->prepare("SELECT * FROM ice_cream");
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$flavor = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producten</title>
</head>

<body> 
    <?php
    foreach ($flavor as $flavor) {
    ?>
        <table class=" table">
            <tbody>
                <tr>
                    <td><?php echo $flavor['flavor'] ?></td>
                </tr>
            </tbody>
        <?php }
        ?>
</body>

</html>