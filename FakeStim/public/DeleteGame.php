<?php

require_once __DIR__ . '/../database/db.php';
 
$id=$_GET['id'];

require_once __DIR__ . '/../model/ShopModel.php';

Suppr($bdd, $id);

header('location:./Shop.php');
