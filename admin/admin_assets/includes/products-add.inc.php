<?php
include('config.inc.php');
if (isset($_POST['addproduct'])) {
    $productname = $_POST['productname'];
    $productprice = $_POST['productprice'];

    $productimage_directory = "./assets/img/product/";
    $productimage_filename = $productimage_directory . $_FILES['productimage']['name'];
    $productimage_filetype = strtolower(pathinfo($productimage_filename, PATHINFO_EXTENSION));
    $valid_extensions = array('jpg', 'jpeg', 'png');

    if (in_array($productimage_filetype, $valid_extensions)) {
        $sql = "INSERT INTO products (productname, productprice, productimage) VALUES ('$productname', '$productprice', '$productimage_filename');";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("location: ../../products.php?report=added");
            exit();
        } else {
            header('location: ../../products-add.php');
            exit();
        }
    }
}
