<?php
session_start();


$pseudo = $_POST['pseudo'];
$email = $_POST['email'];


require_once __DIR__ . '/../database/db.php';
require_once __DIR__ . '/../model/ChangeInfos.php';



changeinfo($bdd,$pseudo,$email,$_SESSION['id']);
