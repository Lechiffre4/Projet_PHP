<?php
session_start();
?>


<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=fakesteamdb;charset=utf8', 'root', ''); //Connection à la BDD
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage()); //Recup des erreurs
}

$reqRec = $bdd->prepare('INSERT INTO profiles(username,email,password) VALUES (:Username, :email ,:password)'); //Enregistrer un utilisateur dans la BDD
$reqPseudo = $bdd->prepare('SELECT * FROM profiles WHERE username = :Username'); //Vérification du pseudo
$reqEmail= $bdd->prepare('SELECT * FROM profiles WHERE email=:email');


$reqPseudo->execute(array(':Username' => htmlspecialchars($_POST['pseudo'])));
$reqEmail->execute(array(':email' => htmlspecialchars($_POST['email'])));



if ($reqPseudo->rowCount() > 0 || $reqEmail->rowCount()>0) { //Vérification de l'existence du pseudo
    echo "Pseudo ou Email déjà utilisé";
    $reqRec=$bdd->prepare('SELECT * FROM profiles');
} 

else {
    $reqRec->execute(array(
            ':Username' => htmlspecialchars($_POST['pseudo']),
            ':email'=> htmlspecialchars($_POST['email']),
            ':password' => password_hash($_POST['password'],PASSWORD_BCRYPT)
            )); //Envois du pseudo et mdp à la BDD

            header('location:./index.php'); //Redirection vers le site
            exit();

}

     

