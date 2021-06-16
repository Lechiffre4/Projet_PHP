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

$reqRec = $bdd->prepare('INSERT INTO profiles(username, password) VALUES (:Username, :password)'); //Enregistrer un utilisateur dans la BDD
$reqPseudo = $bdd->prepare('SELECT * FROM profiles WHERE username = :Username'); //Vérification du pseudo
$reqPseudo->execute(array(':Username' => htmlspecialchars($_POST['pseudo'])));

if ($reqPseudo->rowCount() > 0) { //Vérification de l'existence du pseudo
    echo "Pseudo utilisé";
} else {
    $reqRec->execute(array(
            ':Username' => htmlspecialchars($_POST['pseudo']),
            ':password' => password_hash($_POST['password'],PASSWORD_BCRYPT)
            )); //Envois du pseudo et mdp à la BDD

}
//TODO :
//check le mdp x2;
//faire le login et la session.
//ajouter l'email;
// 

     

