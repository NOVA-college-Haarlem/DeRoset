<?php include 'nav.php';
require 'database.php';
include 'cart.php';
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
                    <br>
                    <button onclick="addToCart(<?php echo $flavor['id'] ?>)">Add to Cart</button>
                    <button onclick="location.href='cart.php'">View Cart</button>
                </div>
            </main>
        <?php
        }
        ?>
    </div>
    <div>
        Cart: <span id="cart-count"><?php echo count($_SESSION['cart']) ?></span> items
    </div>
</body>

</html>