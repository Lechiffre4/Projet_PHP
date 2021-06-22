<?php
session_start();
?>


<!DOCTYPE HTML>



<?php 

if (!isset($_SESSION['pseudo'])){
    session_destroy();
    header('location:./index.php'); //Redirection vers le site
}
?>

<!DOCTYPE HTML>
<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="./assets/stylesProfile.css">
    </head>
    <body>
        <div id="container">
        
        <img class="Pics" src="./assets/Images/image0.png" alt="Pics">
        <a href='./Shop.php' class="button">Go to Shop</a>
        <!-- <button class="button" href="/">Edit Pic</button> -->
        <h2 class="Username">Username</h2>
        <p class="informations"><?php echo $_SESSION['pseudo']; ?></p>
        <h2 class="Username">E-mail :</h2>
        <p class="informations"><?php echo $_SESSION['email']; ?></p>
        <a href='./ChangeInfo.php' class="button" >Edit Informations</a>

        <h2 class="Username">Password:</h2>
        <p class="informations"><?php echo $_SESSION['password']; ?> </p>

        <a href='./disconnect.php' class="button">Disconnect</a>
        <a href='./Admin.php' class="button">SECRET OPTION</a>
        
        
             
            
        </div>
    </body>
</html>