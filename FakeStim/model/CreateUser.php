<?php

function CreateUser($pseudo, $email, $password, $passwordRedo, $bdd){


$reqRec = $bdd->prepare('INSERT INTO profiles(username,email,password) VALUES (:Username, :email ,:password)'); //Enregistrer un utilisateur dans la BDD
$reqPseudo = $bdd->prepare('SELECT * FROM profiles WHERE username = :Username'); //Vérification du pseudo
$reqEmail= $bdd->prepare('SELECT * FROM profiles WHERE email=:email');


$reqPseudo->execute(array(':Username' => htmlspecialchars($pseudo)));
$reqEmail->execute(array(':email' => htmlspecialchars($email)));


if ($password == $passwordRedo){

    if ($reqPseudo->rowCount() > 0 || $reqEmail->rowCount()>0) { //Vérification de l'existence du pseudo
        echo "Pseudo ou Email déjà utilisé";
        $reqRec=$bdd->prepare('SELECT * FROM profiles');
        header('location:./Error/ErrorAlreadyUsed.php');

    } 

    else {
        $reqRec->execute(array(
            ':Username' => htmlspecialchars($pseudo),
            ':email'=> htmlspecialchars($email),
            ':password' => password_hash($password,PASSWORD_BCRYPT)
            )); //Envois du pseudo et mdp à la BDD
            header('location:./index.php');   
    }

} 
else{
header('location:./Error/ErrorRegister.php');
}
}