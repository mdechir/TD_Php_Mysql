<?php
        session_start();
        unset($_SESSION['count']);
        ?>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../RESOURCES/style.css">
        <link rel="icon" href="../RESOURCES/iconeonglet.ico"/>
        <title>final</title>
    </head>
    <body>

    <div class="navbar"> <!-- The navigation menu -->
        <a href="../index.html">Menu</a>
        <a href="../HTML/main.html">HTML</a>
        <a href="../CSS/main.html">CSS</a>
        <a class="active" href="../PHP/main.php">PHP</a>
        <a href="../BDD/main.php">BDD</a>
        <a href="../SQL/main.php">SQL</a>
    </div>

    <div class="navbar"> <!-- The navigation menu -->
        <a href="main.php">Exercice 1</a>
        <a href="exercice2.php">Exercice 2</a>
        <a href="exercice3.php">Exercice 3</a>
        <a href="exercice4.php">Exercice 4</a>
        <a href="exercice5.php">Exercice 5</a>
        <a href="exercice6.php">Exercice 6</a>
        <a href="exercice7.php">Exercice 7</a>
        <a href="exercice8.php">Exercice 8</a>
        <a class="active"  href="exercicefinal.php">Exercice final</a>
        <a href="PHP_Partie2_Exo1.php">Exercice 1 PHP Partie 2</a>
        <a href="PHP_Partie2_Exo2.php">Exercice 2 PHP Partie 2</a>
        <a href="PHP_Partie2_Exo3.php">Exercice 3 PHP Partie 2</a>
        <a href="PHP_Partie2_ExoFinal.php">Exercice Final PHP Partie 2</a>
    </div>
    <p></p>

    <form method="GET">
        <h2>login</h2>
            <input type="text"size="" name="count">
                <input type="submit" value="connexion"></p>
            </form>
            <h2>mot de passe</h2>
            <input type="name">
            <?php
        session_start();
        if (!isset($_SESSION['count'])) {
            $_SESSION['count'] = 0;
        } else {
            $_SESSION['count']++;
        }
        highlight_file(__FILE__)
        ?>
    </body>
</html>
