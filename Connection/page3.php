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
        <title>Page de connection</title>
        <meta charset="utf-8" />
    </head>

    <body>
        <?php
        session_destroy();
        header("location:site.php")

        ?>
    </body>

</html>