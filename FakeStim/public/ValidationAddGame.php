<?php
session_start();

$name = $_POST['name'];
$description = $_POST['description'];
$link = $_POST['link'];
$creator = $_SESSION['pseudo'];
$category = $_POST['category'];

    
require_once __DIR__ . '/../database/db.php';
require_once __DIR__ . '/../model/AddGame.php';

Addgame($name,$description,$link,$creator,$category,$bdd);