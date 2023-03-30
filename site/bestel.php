<?php include 'nav.php';
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
    <script src="store.js" async></script>
    <title>bestel</title>
</head>

<body>
    <div class="grid-container">
        <?php
        foreach ($flavor as $flavor) { ?>
            <main>
                <div class="grid-item">
                    <a href="item.php?id=<?php echo $flavor['id'] ?>">
                        <img style="height: 250px; width: 250px; border-radius: 50%;" src="<?php echo $flavor['image'] ?>" alt="<?php echo $flavor['flavor'] ?>">
                    </a>
                    <br>
                    <strong>
                        <center> <?php echo $flavor['flavor'] ?> </center>
                    </strong>
                </div>
            </main>
        <?php
        }
        ?>
    </div>
</body>

</html> 