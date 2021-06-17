<?php
session_start();
?>

<!DOCTYPE HTML>

<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=fakesteamdb;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>

<!DOCTYPE HTML>
<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <style>
            <?php include __DIR__ . './assets/stylesProfile.css'; ?>
        </style>
    </head>
    <body>
        <div id="container">
         
        <img class="Pics" src="./view/assets/Images/image0.png" alt="Pics">
        <button class="button" href="/">Edit Pic</button>
        <h2 class="Username">Username</h2>
        <p class="informations"><?php $_SESSION['pseudo'] ?></p>
        <button class="button" href="/">Edit Username</button>

        <h2 class="Username">E-mail :</h2>
        <p class="informations">sahelhaouchet@gmail.com </p>
        <button class="button" href="/">Edit Email</button>

        <h2 class="Username">Password:</h2>
        <p class="informations">Aidez_Moi_Aled_Je_Vais_Mourir_Pitie_Pas_Le_Php</p>

        <button class="button" href="/">Edit Password</button>

            
               
            
        </div>
    </body>
</html>