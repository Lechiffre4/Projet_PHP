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

if(isset($_SESSION['pseudo']) && isset($_SESSION['password'])) 
{
    

?>
<html>

    <head>
        <title>Page de connection</title>
        <meta charset="utf-8" />
    </head>

    <body>
        <p>Bienvenue</p>

    </body>
<?php
}
else
{
    die("Acces refusé");
}
?>


</html>