<?php
session_start();

require_once __DIR__ . '/../model/Login.php';
require_once __DIR__ . '/../database/db.php';

$pseudo = $_POST['pseudo'];
$password = $_POST['mdp'];


login($username,$password,$bdd);
header('location:./Profil.php'); //Redirection vers le site


