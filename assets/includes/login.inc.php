<?php
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    include_once 'config.inc.php';
    include_once 'functions.inc.php';

    if (loginNoInput($username, $password) !== false) {
        header("location: ../../login.php?error=missinginput");
        exit();
    }

    loginUser($conn, $username, $password);
} else {
    header("location: ../../login.php");
    exit();
}
