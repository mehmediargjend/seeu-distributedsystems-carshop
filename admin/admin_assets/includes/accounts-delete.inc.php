<?php
include('config.inc.php');
if (isset($_POST['deleteuser'])) {
    $id = $_POST['deleteuser'];

    $sql = "DELETE FROM users WHERE id='$id';";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location: ../../accounts.php?report=deleted');
        exit();
    }
}
