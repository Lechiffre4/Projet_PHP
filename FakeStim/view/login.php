<!-- http://www.codeurjava.com/2016/12/formulaire-de-login-avec-html-css-php-et-mysql.html-->
<?php
session_start();
?>

require_once __DIR__ . '/../database/db.php';


<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="./assets/stylesLog.css">
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="./ValidationConnection.php" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Username</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="pseudo" required>

                <label><b>Password</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="mdp" required>

                <input type="submit" id='submit' value='LOGIN' >
               
            </form>
        </div>
    </body>
</html>
