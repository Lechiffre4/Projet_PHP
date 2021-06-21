<?php

require_once __DIR__ . '/../database/db.php';

$category=$_POST['category'];

include_once __DIR__ . '/../model/ShopModel.php';

$game=search($bdd, $category);

//include view
include_once __DIR__ . '/../view/Shop.php';