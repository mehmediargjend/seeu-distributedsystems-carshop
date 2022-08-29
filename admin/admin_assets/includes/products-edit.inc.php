<?php
include('config.inc.php');
if (isset($_POST['editproduct'])) {
    $id = $_POST['id'];
    $productname = $_POST['productname'];
    $productprice = $_POST['productprice'];

    $productimage_filename = $_FILES['productimage']['name'];
    if ($productimage_filename == null) {
        $sql = "UPDATE products SET productname='$productname', productprice='$productprice' WHERE id='$id';";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("location: ../../products.php?report=edited");
            exit();
        } else {
            header('location: ../../products-edit.php');
            exit();
        }
    } else {
        $productimage_directory = "./assets/img/product/";
        $productimage_filename = $productimage_directory . $productimage_filename;
        $sql = "UPDATE products SET productname='$productname', productprice='$productprice', productimage='$productimage_filename' WHERE id='$id';";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("location: ../../products.php?report=edited");
            exit();
        } else {
            header('location: ../../products-edit.php');
            exit();
        }
    }
}
