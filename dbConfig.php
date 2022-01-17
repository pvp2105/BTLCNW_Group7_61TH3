<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "linkedin";

//B1: Ket noi toi Database Server
$db = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName); 

// Kiểm tra có lỗi hay k?
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
?>