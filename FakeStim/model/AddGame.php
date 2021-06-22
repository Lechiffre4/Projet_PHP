<?php

function Addgame($name,$description,$link,$creator,$category,$bdd){

    $reqAdd = $bdd->prepare('INSERT INTO games(name,description,link,creator,category) VALUES (:name, :description ,:link,:creator,:category);'); //Enregistrer un utilisateur dans la BDD
    $reqAdd-> execute(array(
        ':name'=>htmlspecialchars($name),
        ':description'=>htmlspecialchars($description),
        ':link'=>$link,
        ':creator'=>htmlspecialchars($creator),
        ':category'=> htmlspecialchars($category),
    ));

    header('location:./Shop.php');

}