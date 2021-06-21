<?php

$game= array();

$reqSearch = $bdd->prepare('SELECT name,description FROM games'); //Enregistrer un utilisateur dans la BDD
$reqSearch-> execute(array());

$game = $reqSearch->fetchAll();



