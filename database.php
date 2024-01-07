<?php
$hostName = "localhost";
$dbUser = "u557880975_vinnize";
$dbPassword = "cSWAGVAMEMO123";
$dbName = "u557880975_cafekonek";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>