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
        <link rel="stylesheet" href="./assets/stylesIndex.css">
    </head>
    <body>
        <div id="container">
         <h1 class="Title">Welcome to FakeStim</h1>
         <a class="button" href='Profil.php'>Profile</a>
        </div>
    </body>



</html>

