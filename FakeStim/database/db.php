<?php 

 
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=fakesteamdb;charset=utf8', 'root', ''); //Connection à la BDD
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage()); //Recup des erreurs
}

