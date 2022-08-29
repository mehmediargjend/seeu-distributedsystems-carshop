<?php
session_start();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $_SESSION['cart'][$id] = array();
    header('location: ../../cart.php');
}
