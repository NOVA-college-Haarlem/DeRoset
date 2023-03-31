<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f1f1f1;
    }

    form {
        width: 30%;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    label {
        display: block;
        margin-bottom: 8px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="text"] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="submit"] {
        width: 100%;
        background-color: #94C973;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #94C973;
    }

    .login {
        color: rgb(137, 137, 137);
        font-size: small;
        text-align: center;
    }
</style>
<html>
<form action="processSignup.php" method="post">
    <label for="firstname">Voornaam:</label>
    <input type="text" id="firstname" name="firstname" required><br>
    <label for="lastname">Achternaam:</label>
    <input type="text" id="lastname" name="lastname" required><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>
    <label for="password">Wachtwoord:</label>
    <input type="password" id="password" name="password" required><br>
    <label for="address">Adres:</label>
    <input type="text" id="address" name="address" required><br>
    <input type="submit" value="Sign Up">
    <div class="login">
        Al een account? <a href="login.php">Login</a>
    </div>
</form>

</html>