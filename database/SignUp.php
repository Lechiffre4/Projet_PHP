<?php

if (isset($_POST['submit'])) {
    $name = $_POST['username'];
    $email = $_POST['Email'];
    $pwd = $_POST['password'];
    $pwdRepeat = $_POST['passwordRepeat'];

    require_once 'db.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup() !== false) {
        header('location: ../signup.php?error=emptyinput');
        exit();
    }
    if (invalidIid($username)!==false){
        header("");
    }

} else {
    header('location: ../');
    exit();
}

