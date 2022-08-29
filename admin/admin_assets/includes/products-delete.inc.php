<?php
include('config.inc.php');
if (isset($_POST['deleteproduct'])) {
    $id = $_POST['deleteproduct'];

    $sql = "DELETE FROM products WHERE id='$id';";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location: ../../products.php?report=deleted");
        exit();
    }
}
