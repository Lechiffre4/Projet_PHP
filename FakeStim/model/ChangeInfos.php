<?php

function changeinfo($bdd, $pseudo, $email,$id)
{

        $sql = "UPDATE profiles SET username = :name, email = :mail WHERE id = :id";
        $sth = $bdd->prepare($sql);
        $sth->execute(array(':name' => htmlspecialchars($pseudo), ':mail' => htmlspecialchars($email) ,':id' => $id));

         

        $_SESSION['pseudo'] = $pseudo;
        $_SESSION['email'] = $email;

        header('location:./Profil.php');
        exit();
}

