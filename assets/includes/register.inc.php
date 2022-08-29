<?php
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    include_once 'config.inc.php';
    include_once 'functions.inc.php';

    if (registerNoInput($username, $password, $confirm_password) !== false) {
        header("location: ../../register.php?error=missinginput");
        exit();
    }

    if (matchPassword($password, $confirm_password) !== false) {
        header("location: ../../register.php?error=nopasswordmatch");
        exit();
    }

    if (takenUsername($conn, $username) !== false) {
        header("location: ../../register.php?error=takenusername");
        exit();
    }

    createUser($conn, $username, $email, $password);
} else {
    header("location: ../../register.php");
    exit();
}
