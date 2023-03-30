<!DOCTYPE html>
<html>

<head>
    <title>Login Pagina</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        width: 100%;
        color: white;
    }

    html {
        background: url('https://imgs.search.brave.com/rkfA80n9EAGdI8pBbpOnTTJFp8VaT0WTpbDM5PzIp4s/rs:fit:1200:1200:1/g:ce/aHR0cHM6Ly93d3cu/bWV0cm9uaWV1d3Mu/bmwvd3AtY29udGVu/dC91cGxvYWRzLzIw/MTcvMDQvNmEzYzg5/YTlhY2U1Y2RlMmIw/NzQ4MTNkZGE2M2Ji/OGUtMTQ5MTY1NDQy/NC5qcGc') no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover; 
    }

    h1 {
        text-align: center;
        color: white;
        margin: 30px 0;
    }

    form {
        max-width: 300px;
        margin: 0 auto;
        text-align: center;
    }

    label {
        display: block;
        margin-bottom: 8px;
        color: white;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #fff;
        font-size: 16px;
    }

    input[type="submit"] {
        width: 100%;
        background-color: #94C973;
        color: #fff;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    input[type="submit"]:hover {
        background-color: #94C973;
    }

    .signup {
        color: white;
        font-size: small;

    }
</style>

<body>
    <h1> Login </h1>
</body>
<form action=" processlogin.php" method="post">
    <label for="email">E-mail:</label>
    <input type="text" id="email" name="email" placeholder=""><br>
    <br>
    <label for="password">Wachtwoord:</label>
    <input type="password" id="password" name="password"><br>
    <br>
    <input type="submit" value="Inloggen">
    <div class="signup">
        Geen account? <a href="signup.php" style="color: #f9f9f9">meld je aan!</a>
    </div>
</form>
<?php
if (isset($_GET['error'])) {
    $error = $_GET['error'];
?>
    <center>
        <p style="color:red"> <?php echo $error; ?> </p>
    </center>
<?php } ?>

</html>