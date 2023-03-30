<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>IJswinkel</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="apple-touch-icon" href="/example.png">
    <meta name="theme-color" content="#317EFB" />
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<style>
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        padding: 12px 16px;
        z-index: 1;
        font-size: 15px;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }
</style>

<body>

    <nav>
        <ul>
            <Li> <img src="images/logo-de-roset.png" style="height: 150px" alt="smd"></img></li>
            <li><a href="index.php">Over ons</a></li>
            <li><a href="bestel.php">Bestellen</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contact.php">Contact</a></li>
            <?php if(isset($_SESSION['role'])) { ?>
                <li><a href="employeedash.php">dashboard</a></li>
            <?php } else { ?>
                <li><a href="winkelmandje.php">Winkelmandje</a></li>
            <?php } ?>
            <div class="dropdown">
                <?php if (isset($_SESSION['logedin'])) { ?>
                    <li>
                        <a><?php echo $_SESSION['firstname'] ?></a>
                    </li>
                    <div class="dropdown-content">
                        <li><a href="gegevens.php">mijn account</a></li>
                        <li><a href="logout.php">log uit</a></li>
                    </div>
            </div>
        <?php } else { ?>
            <li>
                <a href="login.php">login</a>
            </li>
        <?php } ?>
        </ul>
    </nav>