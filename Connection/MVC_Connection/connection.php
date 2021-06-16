<?php
session_start();
?>

<!DOCTYPE html>

<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=connection;charset=utf8', 'root', ''); //Connection à la BDD
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage()); //Recup des erreurs
}
?>

<html>

    <head>
        <link rel="stylesheet" href="../CSS/connectionstyle.css">
        <title>Page de connection</title>
        <meta charset="utf-8" />
    </head>

    <body>     
        <form method="post" action="validationIConnection.php">
            <h2>Connectez vous</h2>
            Pseudo : <input type="text" name="pseudo" class="pseudoInput" required/>
            <br/>
            Mot de passe : <input type="password" name="mdp" class="passwordInput" required/>
            <br/>
            <br/>
            <input type="submit" value="Valider" class="submit">
            <br/>
            <br/>

        </form>

    </body>

</html>