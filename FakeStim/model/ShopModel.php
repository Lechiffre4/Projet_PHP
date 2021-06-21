<?php

$game= array();
$jeux=array();
$infos=array();


function search($bdd, $category){

if ($category == "Aventure"){
$reqCat = $bdd->prepare('SELECT id,name,description,category FROM games WHERE category = :cat');
$reqCat->execute(array(':cat'=>htmlspecialchars($category)));
$game= $reqCat->fetchAll();
}

if ($category == "Action"){
	$reqCat = $bdd->prepare('SELECT id,name,description,category FROM games WHERE category = :cat');
	$reqCat->execute(array(':cat'=>htmlspecialchars($category)));
	$game= $reqCat->fetchAll();
}

if ($category == "Enigme"){
	$reqCat = $bdd->prepare('SELECT id,name,description,category FROM games WHERE category = :cat');
	$reqCat->execute(array(':cat'=>htmlspecialchars($category)));
	$game= $reqCat->fetchAll();
}
if ($category == "BattleRoyale"){
	$reqCat = $bdd->prepare('SELECT id,name,description,category FROM games WHERE category = :cat');
	$reqCat->execute(array(':cat'=>htmlspecialchars($category)));
	$game= $reqCat->fetchAll();
}


if($category == "All"){
$reqSearch = $bdd->prepare('SELECT id,name,description FROM games'); //Enregistrer un utilisateur dans la BDD
$reqSearch-> execute(array());
$game = $reqSearch->fetchAll();
}
return $game;
}


function SearchByName($bdd, $result){
	$reqName = $bdd->prepare('SELECT id,name,description,category FROM games WHERE name LIKE :name');
	$reqName->execute(array(':name'=> '%' . htmlspecialchars($result) .  '%'));
	$result= $reqName->fetchAll();
	return $result;
}

function GetInfos($bdd, $id){
	$reqName = $bdd->prepare('SELECT id,name,description,link,category,creator FROM games WHERE id = :id');
	$reqName->execute(array(':id'=>htmlspecialchars($id)));
	$result= $reqName->fetchAll();
	return $result[0];
}

