<?php
include('config.inc.php');
if (isset($_POST['updateuser'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    $sql = "UPDATE users SET username='$username', email='$email', role='$role' WHERE id='$id';";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location: ../../accounts.php?report=edited');
        exit();
    }
}
