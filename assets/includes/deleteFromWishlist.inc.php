<?php
session_start();
include_once 'config.inc.php';

if (!isset($_SESSION["userid"])) {
    header('location: ../../shop.php');
} else {
    $userid = $_SESSION['userid'];
    $productid = $_GET['productid'];
    $deleteFromWishlist = "DELETE FROM wishlist WHERE productid = '$productid' AND userid = '$userid';";
    if (mysqli_query($conn, $deleteFromWishlist)) {
        header('location: ../../wishlist.php');
    }
}
