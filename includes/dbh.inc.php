<?php

$serverName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "newsfeedsystem";

$conn = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName);

// checking for connection errors
if (!$conn){
    die("Connection failed: "  . mysqli_connect_error())
}