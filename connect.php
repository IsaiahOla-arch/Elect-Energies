<?php

// Database connection
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "elect";

$con = mysqli_connect($hostname, $username, $password, $dbname);

if(!$con){
    die(mysqli_connect_error());
}
?>