<?php
session_start();
include_once 'config.inc.php';

if (!isset($_SESSION["userid"])) {
    header('location: ../../shop.php');
} else {
    $userid = $_SESSION['userid'];
    $productid = $_GET['id'];

    $sqlTest = "SELECT * FROM wishlist WHERE productid = '$productid' AND userid = '$userid';";
    $resultTest = mysqli_query($conn, $sqlTest);
    if (mysqli_num_rows($resultTest) == 1) {
        echo '<script>alert("Product already in your wishlist!")</script>';
        header('location: ../../wishlist.php');
    } else {
        $insertToWishlist = "INSERT INTO wishlist (productid, userid) VALUES ('$productid', '$userid');";
        if (mysqli_query($conn, $insertToWishlist)) {
            header('location: ../../wishlist.php');
        }
    }
}
