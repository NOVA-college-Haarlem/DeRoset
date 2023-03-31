<?php include 'nav.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>The Scoop</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #fff;
        }

        header {
            background-color: #A0BD93;
            color: white;
            padding: 20px;
            text-align: center;
        }

        h1 {
            margin: 0;
            font-size: 40px;
        }

        main {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding: 20px;
            margin-top: 20px;
        }

        aside {
            flex: 1;
            margin-right: 20px;
            background-color: #fff;
            padding: 20px;
        }

        h3 {
            font-size: 24px;
            margin-top: 0;
        }

        .flavor {
            display: block;
            margin: 0 auto;
            width: 200px;
            height: 200px;
            border-radius: 50%;

        }

        article {
            flex: 3;
            background-color: #fff;
            padding: 20px;
        }

        h2 {
            font-size: 36px;
            margin-top: 0;
        }

        p {
            font-size: 18px;
            line-height: 1.5;
            margin-top: 0;
        }
    </style>
</head>

<body>
    <header>
        <h1>The Scoop</h1>
    </header>
    <main>
        <aside>
            <h3>Smaken van de Week</h3>
            <ul>
                <h>

                    <a href="bestel.php"><img class="flavor" src="images/butter.jpg" alt="Butter Pecan"></a>
                    Butter Pecan
                </h>
                <h>
                    <a href="bestel.php"><img class="flavor" src="images/phish.jpg" alt="Phish Food"></a>
                    Phish Food
                </h>
                <h>
                    <a href="bestel.php"><img class="flavor" src="images/chunky.jpg" alt="chunky monkey"> </a>
                    Chunky Monkey
                </h>
            </ul>
        </aside>
        <article>
            <header>
                <h2>Nieuwe ijssmaken van Delicious Delights IJs</h2>
            </header>
            <p>Delicious Delights IJs heeft drie nieuwe smaken toegevoegd aan het assortiment: Chocolade Framboos, Pistache en Banaan Nutella.</p>
            <p>De Chocolade Framboos is een heerlijke combinatie van pure chocolade en verse frambozen. De Pistache is gemaakt met echte pistachenoten en heeft een licht nootachtige smaak. En de Banaan Nutella is een romige ijssmaak met stukjes verse banaan en een swirl van Nutella.</p>
            <p>Kom langs bij onze ijssalon om deze nieuwe smaken te proeven! We hebben ook nog andere heerlijke smaken in ons assortiment