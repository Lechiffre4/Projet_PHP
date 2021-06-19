<?php
session_start();

$pseudo = $_POST['pseudo'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordRedo = $_POST['passwordRepeat'];
    
require_once __DIR__ . '/../database/db.php';
require_once __DIR__ . '/../model/CreateUser.php';

CreateUser($pseudo,$email,$password,$passwordRedo,$bdd);
header('location: ./index.php');

    




