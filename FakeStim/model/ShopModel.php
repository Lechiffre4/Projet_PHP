<?php

$game= array();



function search($bdd, $category){

if ($category == "Aventure"){
$reqCat = $bdd->prepare('SELECT name,description,category FROM games WHERE category = :cat');
$reqCat->execute(array(':cat'=>htmlspecialchars($category)));
$game= $reqCat->fetchAll();
}

if ($category == "Action"){
	$reqCat = $bdd->prepare('SELECT name,description,category FROM games WHERE category = :cat');
	$reqCat->execute(array(':cat'=>htmlspecialchars($category)));
	$game= $reqCat->fetchAll();
}

if ($category == "Enigme"){
	$reqCat = $bdd->prepare('SELECT name,description,category FROM games WHERE category = :cat');
	$reqCat->execute(array(':cat'=>htmlspecialchars($category)));
	$game= $reqCat->fetchAll();
}
if ($category == "BattleRoyale"){
	$reqCat = $bdd->prepare('SELECT name,description,category FROM games WHERE category = :cat');
	$reqCat->execute(array(':cat'=>htmlspecialchars($category)));
	$game= $reqCat->fetchAll();
}


if($category == "All"){
$reqSearch = $bdd->prepare('SELECT name,description FROM games'); //Enregistrer un utilisateur dans la BDD
$reqSearch-> execute(array());
$game = $reqSearch->fetchAll();
}
return $game;
}

