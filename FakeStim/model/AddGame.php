<?php

function Addgame($name,$description,$link,$creator,$bdd){

    $reqAdd = $bdd->prepare('INSERT INTO games(name,description,link,creator) VALUES (:name, :description ,:link,:creator)'); //Enregistrer un utilisateur dans la BDD
    $reqAdd-> execute(array(
        ':name'=>htmlspecialchars($name),
        ':description'=>htmlspecialchars($description),
        ':link'=>$link,
        ':creator'=>htmlspecialchars($creator)
    ));

    header('location:./Shop.php');

}