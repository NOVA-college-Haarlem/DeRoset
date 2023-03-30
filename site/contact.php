<?php
// session_start();
include 'nav.php' ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>De Roset | Contact</title>
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

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 20px;
            overflow: hidden;
            font-size: 30px;
            background-color: #B2D2A4;
        }

        nav li {
            float: left;
        }

        nav li a {
            display: block;
            color: #333;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;

        }

        nav li a:hover {
            background-color: #94C973;
        }

        /* CSS styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            background-color: #F1A7A7;
            padding: 20px;
            text-align: center;
            color: white;
        }

        h1 {
            font-size: 36px;
            margin: 0;
        }

        main {
            padding: 20px;
        }

        form {
            max-width: 500px;
            margin: 100px auto;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #F1A7A7;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #DD6B6B;
        }


        footer {
            background-color: #B2D2A4;
            padding: 10px;
            text-align: center;
            font-size: 12px;
            color: white;
            clear: both;
            margin-top: auto;

        }
    </style>
</head>

<body>
    <main>
        <div></div>
        <form action="berichtverzonden.php" method="post">
            <label for="name">Naam:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">E-mailadres:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Bericht:</label>
            <textarea id="message" name="message" rows="5" required></textarea>
            <input type="submit" value="Verzenden">
        </form>
    </main>
</body>
<footer>
    <p>De Roset</p>
    <p>Burgemeester Mooijstraat 17</p>
    <p> 1901 EP, Castricum</p>
    <p>Tel: (420) 80085135</p>
    <p>E-mail: info@deroset.nl</p>

</footer>


</html>