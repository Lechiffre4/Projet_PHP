<?php
require_once __DIR__ . '/../database/db.php';



include_once __DIR__ . '/../model/ShopModel.php';

if(isset($_POST['search']) ){
    $result=$_POST['search'];
    $game=SearchByName($bdd, $result);
}

//include view
include_once __DIR__ . '/../view/SearchGame.php';