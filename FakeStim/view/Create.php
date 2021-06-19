<!-- http://www.codeurjava.com/2016/12/formulaire-de-login-avec-html-css-php-et-mysql.html-->
<?php
session_start();
?>

<!DOCTYPE HTML>




<html>
    <head>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="./assets/stylesCreate.css">
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="./ValidationInscription.php" method="post">
                <h1>Create Account</h1>
                
                <label><b>Username</b></label>
                <input type="text" placeholder="Entrez votre nom d'utilisateur" name="pseudo" required>

                <label><b>Email</b></label>
                <input type="text" placeholder="Entrez votre Email" name="email" required>

                <label><b>Password</b></label>
                <input type="password" placeholder="Entrez votre mot de passe" name="password" required>

                <label><b>Repeat Password</b></label>
                <input type="password" placeholder="Entrez de nouveau le mdp" name="passwordRepeat" required>

                <input type="submit" id='submit' value='CREATE' >
               
            </form>
        </div>
    </body>
</html>





