<?php
include('config.inc.php');
include('../../../assets/includes/functions.inc.php');
if (isset($_POST['adduser'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $sql = "INSERT INTO users (username, email, userpassword, role) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../../../register.php?error=stmtfail");
        exit();
    }

    if (takenUsername($conn, $username) !== false) {
        header("location: ../../accounts.php?report=takenusername");
        exit();
    }

    $hash_password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $hash_password, $role);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../../accounts.php?report=added");
    exit();
}
