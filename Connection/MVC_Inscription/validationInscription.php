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

$reqRec = $bdd->prepare('INSERT INTO users(pseudo,password) VALUES(:pseudo,:password)'); //Enregistrer un utilisateur dans la BDD
$reqPseudo = $bdd->prepare('SELECT * FROM users WHERE pseudo = :pseudo'); //Vérification du pseudo
$reqPseudo->execute(array('pseudo' => htmlspecialchars($_POST['pseudo'])));

if ($reqPseudo->rowCount() > 0) { //Vérification de l'existence du pseudo
    echo "Pseudo utilisé";
} else {
    $reqRec->execute(array(
            'pseudo' => htmlspecialchars($_POST['pseudo']),
            'password' => password_hash($_POST['mdp'],PASSWORD_BCRYPT)
            )); //Envois du pseudo et mdp à la BDD
    header('location:../site.php'); //Redirection vers le site

}


     

?>

<html>

    <head>
        <title>Page de connection</title>
        <meta charset="utf-8" />
    </head>

    <body>

        <p>Vous allez être redirigé, veuillez patienter...</p>

    </body>

</html>