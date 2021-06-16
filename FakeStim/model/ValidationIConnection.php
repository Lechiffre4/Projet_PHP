<?php
session_start();
?>


<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=fakesteamdb charset=utf8', 'root', ''); //Connection à la BDD
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage()); //Recup des erreurs
}

$reqValidation = $bdd->prepare('SELECT * FROM profiles WHERE username = :pseudo'); //recuperation du champ correspondant au pseudo
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

