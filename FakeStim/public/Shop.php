<?php

require_once __DIR__ . '/../database/db.php';

if(isset($_POST['category'])){
$category=$_POST['category'];
}


include_once __DIR__ . '/../model/ShopModel.php';

if(isset($_POST['category'])){
$game=search($bdd, $category);
}

//include view
include_once __DIR__ . '/../view/Shop.php';