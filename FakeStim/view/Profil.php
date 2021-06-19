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
        <button class="button" href="/">Edit Pic</button>
        <h2 class="Username">Username</h2>
        <p class="informations"><?php echo $_SESSION['pseudo']; ?></p>
        <button class="button" href="/">Edit Username</button>

        <h2 class="Username">E-mail :</h2>
        <p class="informations"><?php echo $_SESSION['email']; ?></p>
        <button class="button" href="/">Edit Email</button>

        <h2 class="Username">Password:</h2>
        <p class="informations"><?php echo $_SESSION['password']; ?> </p>

        <button class="button" href="/">Edit Password</button>

        <button class="button" onclick="window.location.href='<?php session_unset(); session_destroy(); ?> '" > logout</button>
        
             
            
        </div>
    </body>
</html>