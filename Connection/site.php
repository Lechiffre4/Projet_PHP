<?php
session_start();
?>

<!DOCTYPE html>

<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=connection;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>

<html>

    <head>
        <link rel="stylesheet" href="CSS/indexstyle.css">
        <title>Page de connection</title>
        <meta charset="utf-8" />
    </head>
    <header>
        <?php include("header.php"); ?>

    </header>

    <body>

        <p>Bienvenue <?php
        if (isset($_SESSION['pseudo']))
        {
        	echo $_SESSION['pseudo']; 
        }
        else
        {
        	die("Aucune session enregistrée");
        }
        ?> !</p>
        <a href="page3.php">Destroy session</a>
        <a href="page2">Clic batard </a>
        <br/>
        

    </body>
    <footer>
        <?php include("footer.php"); ?>

    </footer>

</html>