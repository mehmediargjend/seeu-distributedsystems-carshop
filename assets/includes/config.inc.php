<?php
$serverName = 'seeu-distributedsystems-db-1.clt8ml8ipzbi.us-east-1.rds.amazonaws.com';
$databaseUser = 'admin';
$databasePass = 'dbpassword';
$databaseName = 'carshop';

$conn = mysqli_connect($serverName, $databaseUser, $databasePass, $databaseName);

if (!$conn) {
    die("There's an Error. Database couldn't connect." . mysqli_connect_error());
}
