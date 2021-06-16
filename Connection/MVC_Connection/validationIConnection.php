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

$reqValidation = $bdd->prepare('SELECT * FROM users WHERE pseudo = :pseudo'); //recuperation du champ correspondant au pseudo
$reqValidation->execute(array(
	'pseudo' => htmlspecialchars($_POST['pseudo'])
));


$result = $reqValidation->fetch(PDO::FETCH_ASSOC); //Conversion du résultat en array

if (password_verify($_POST['mdp'],$result['password'] )) //Vérification du hash
{
	

    header('location:../site.php'); //Redirection vers le site
    
    $_SESSION['id'] = $result['userid'];
    $_SESSION['pseudo'] = $result['pseudo'];
    $_SESSION['password'] = $result['password'];

} 

else 
{
    echo "Pseudo ou mot de passe incorrecte";
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