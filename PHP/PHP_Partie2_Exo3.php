<?php include "func/AVERAGE.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../RESOURCES/style.css">
    <link rel="icon" href="../RESOURCES/iconeonglet.ico"/>
    <title>Exercice 3</title>
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
        <a href="exercicefinal.php">Exercice final</a>
        <a href="PHP_Partie2_Exo1.php">Exercice 1 PHP Partie 2</a>
        <a href="PHP_Partie2_Exo2.php">Exercice 2 PHP Partie 2</a>
        <a class="active" href="PHP_Partie2_Exo3.php">Exercice 3 PHP Partie 2</a>
        <a href="PHP_Partie2_ExoFinal.php">Exercice Final PHP Partie 2</a>
    </div>
    <p></p>

    <div>
        <h1>Exercice :</h1>
        <table>
            <form action="" method="post">
                <tr>
                    <th>Valeurs : </th>
                    <td><input type="number" name="Valeur1" id="Valeur1"></td>
                    <td><input type="number" name="Valeur2" id="Valeur2"></td>
                    <td><input type="number" name="Valeur3" id="Valeur3"></td>
                </tr>
                <tr>
                    <td><button type="submit" name="Calcul">Calcul</button></td>
                </tr>  
            </form> 
        </table>   
    </div>
    <div class="bottom">
        <?php
            if(isset($_POST['Calcul'])){
                moyenne(
                    array($_POST['Valeur1'],$_POST['Valeur2'],$_POST['Valeur3'])
                );
            }
        ?>
    </div>

   
    <div>
        <h1>Code source :</h1>
        <?php highlight_file(__FILE__); ?>
        <h1>Code source Fonction :</h1>
        <?php highlight_file("func/AVERAGE.php"); ?>
    </div>
    
</body>
</html>