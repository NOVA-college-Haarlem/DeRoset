<!DOCTYPE html>
<html>

<head>
    <title>Edit User</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
    }

    h1 {
        font-size: 24px;
        text-align: center;
        margin-top: 20px;
    }

    form {
        width: 50%;
        margin: 0 auto;
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 5px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    input[type="text"],
    input[type="email"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #3e8e41;
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

<body>
    <h1>Edit User</h1>
    <?php
    require 'database.php';
    // Retrieve the user ID from the URL parameter
    $id = $_GET['id'];
    // Retrieve the user data from the database based on the ID
    $stmt = $conn->prepare("SELECT * FROM user WHERE id = :id");
    $stmt->execute(['id' => $id]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    // Retrieve the user data from the database based on the ID
    // Your PHP code to retrieve user data from the database

    if ($row) {
        // If the user exists, display the edit form with the user data
    ?>
        <form method="post" action="update.php">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']); ?>">
            <label for="firstname">First Name:</label>
            <input type="text" name="firstname" value="<?php echo htmlspecialchars($row['firstname']); ?>"><br>
            <label for="lastname">Last Name:</label>
            <input type="text" name="lastname" value="<?php echo htmlspecialchars($row['lastname']); ?>"><br>
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>"><br>
            <input type="submit" value="Save">
            <a href="deleteuser.php?id=<?php echo $id ?>">delete</a>

        </form>
    <?php
    } else {
        // If the user does not exist, display an error message
        echo "User not found.";
    }
    ?>
</body>

</html>