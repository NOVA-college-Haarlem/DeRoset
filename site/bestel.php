<?php
include 'nav.php';
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="store.js" async></script>
    <title>bestel</title>
    <style>
        .cart {
            position: fixed;
            top: 0;
            right: -350px;
            width: 320px;
            height: 100%;
            background-color: white;
            padding: 20px;
            transition: right 0.5s ease-in-out;
        }

        .cart.show {
            right: 0.1%;
        }

        .cart iframe {
            width: 100%;
            height: 80%;
        }

        .cart h2 {
            text-align: center;
        }

        #cart-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding: 10px;
            background-color: blue;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #cart-count {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="grid-container">
    <div class="cart">
            <h2>Shopping Cart</h2>
            <iframe title="cart" src="cart.php"></iframe>
        </div>
        <button id="cart-button">Cart: <span id="cart-count"><?php echo count($_SESSION['cart']) ?></span> items</button>
        
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
                   <a href="bestel.php"> <center> <button onclick="addToCart(<?php echo $flavor['id'] ?>)">Add to Cart</button></center></a>
                </div>
            </main>
        <?php
        }
        ?>
    </div>

    <script>
        const cartButton = document.getElementById('cart-button');
        const cart = document.querySelector('.cart');

        cartButton.addEventListener('click', () => {
            cart.classList.toggle('show');
        });
    </script>
</body>
<?php var_dump($_SESSION);?>
</html>