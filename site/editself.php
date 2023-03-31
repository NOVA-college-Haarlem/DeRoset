<?php
include 'nav.php';
require 'database.php';

$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM user WHERE id = $id");
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$user = $stmt->fetch();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit User Data</title>
</head>

<body>
    <h1>Edit User Data</h1>
    <form method="post" action="processeditself.php?id=<?php echo $id ?>">
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" value="<?php echo $user['firstname']; ?>" required>
        <br>
        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" value="<?php echo $user['lastname']; ?>" required>
        <br>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" value="<?php echo $user['adress']; ?>" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>" required>
        <br>
        <button type="submit">Update</button>
    </form>
</body>

</html>