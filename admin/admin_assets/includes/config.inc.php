<?php
$serverName = 'localhost';
$databaseUser = 'user1';
$databasePass = '';
$databaseName = 'carshop';

$conn = mysqli_connect($serverName, $databaseUser, $databasePass, $databaseName);

if (!$conn) {
    die("There's an Error. Database couldn't connect." . mysqli_connect_error());
}
