<?php 
session_start();

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
        <link rel="stylesheet" href="./assets/stylesShop.css">
    </head>
    <body>
        <div>
            <a class="profilebutton" href='Profil.php'>Profile</a>
            <a class="Addgame" href='AddGame.php'>Add a Game</a>
        </div>
        <div id="container">
         <h1 class="Title">Welcome to FakeStim</h1>
        </div>
        <table>
            
        </table>


    </body>



</html>

