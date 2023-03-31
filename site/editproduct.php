<?php
require 'database.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Product Bewerken</title>
    <style>
        form {
            width: 50%;
            margin: auto;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        a {
            background-color: red;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <?php
    // Productgegevens ophalen uit de database
    $product_id = $_GET["id"];

    $sql = "SELECT * FROM ice_cream WHERE id = $product_id";
    $result = $conn->query($sql);

    $product = $result->fetch();
    ?>

    <form action="update_product.php" method="post">
        <input type="hidden" name="id" value="<?php echo $product_id; ?>">
        <label for="naam">Naam:</label>
        <input type="text" name="naam" id="naam" value="<?php echo $product['flavor']; ?>">
        <label for="beschrijving">Beschrijving:</label>
        <input type="text" name="beschrijving" id="beschrijving" value="<?php echo $product['description']; ?>">
        <label for="prijs">Prijs:</label>
        <input type="text" name="prijs" id="prijs" value="<?php echo $product['price']; ?>">
        <input type="submit" value="Opslaan">
        <a href="deleteproduct.php?id=<?php echo $product_id ?>">delete</a>

    </form>
</body>

</html>