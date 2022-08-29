<?php

function registerNoInput($username, $password, $confirm_password)
{
    $flag = false;
    if (empty($username) || empty($password) || empty($confirm_password)) {
        $flag = true;
    }
    return $flag;
}

function loginNoInput($username, $password)
{
    $flag = false;
    if (empty($username) || empty($password)) {
        $flag = true;
    }
    return $flag;
}

function matchPassword($password, $confirm_password)
{
    $flag = false;
    if ($password !== $confirm_password) {
        $flag = true;
    }
    return $flag;
}

function takenUsername($conn, $username)
{
    $sql = "SELECT * FROM users WHERE username = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../../register.php?error=stmtfail");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($result)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $username, $email, $password)
{
    $sql = "INSERT INTO users (username, email, userpassword) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../../register.php?error=stmtfail");
        exit();
    }

    $hash_password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hash_password);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../../register.php?error=noregistererror");
    exit();
}

function loginUser($conn, $username, $password)
{
    $username_exists = takenUsername($conn, $username);
    if ($username_exists === false) {
        header("location: ../../login.php?error=loginerror");
        exit();
    }

    $role = $username_exists["role"];
    $hash_password = $username_exists["userpassword"];
    $check_password = password_verify($password, $hash_password);

    if ($check_password === false) {
        header("location: ../../login.php?error=loginerror");
        exit();
    } else if ($check_password === true) {
        session_start();
        $_SESSION['admin'] = "$role";
        if ($_SESSION['admin'] == '1') {
            $_SESSION["username"] = $username_exists["username"];
            header("location: ../../admin/index.php");
            exit();
        } else if ($_SESSION['admin'] == '0') {
            $_SESSION["userid"] = $username_exists["id"];
            $_SESSION["username"] = $username_exists["username"];
            header("location: ../../index.php");
            exit();
        }
    }
}
