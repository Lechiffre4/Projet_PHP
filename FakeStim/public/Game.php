<?php

 require_once __DIR__ . '/../database/db.php';
 

 include __DIR__ . '/../model/ShopModel.php';

$id = $_GET['id'];
$Game=GetInfos($bdd, $id);


 //include view
if($Game===null){
include __DIR__ . '/../view/404.php';
}
else{
include __DIR__ . '/../view/Game.php';
}