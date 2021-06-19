<?php 

session_start();

function login($username,$password,$bdd){

    $reqValidation = $bdd->prepare('SELECT * FROM profiles WHERE username = :pseudo'); //recuperation du champ correspondant au pseudo
    $reqValidation->execute(array(
	':pseudo' => htmlspecialchars($username)
    ));


    $result = $reqValidation->fetch(PDO::FETCH_ASSOC); //Conversion du résultat en array
    

    if (password_verify($password,$result['password'])) //Vérification du hash
    {
    $_SESSION['id'] = $result['id'];
    $_SESSION['pseudo'] = $result['username'];
    $_SESSION['email'] = $result['email'];
    $_SESSION['password'] = $result['password'];

    
   
    header('location:./Shop.php');
    } 

    else 
    {
    echo "Pseudo ou mot de passe incorrect";
    header('location:./Error/Errorlogin.php');
    }
}

