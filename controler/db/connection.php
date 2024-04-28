<?php

$hostname = 'localhost';
$username = 'root';
$pass = '';




$conn = mysqli_connect($hostname, $username, $pass,);

// Check connection newspapre
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// database create automatic when loade project
$projectName = 'BDNews24';

$sql =  "CREATE DATABASE IF NOT EXISTS $projectName";
mysqli_query($conn, $sql);



// DATABASE USER TABLE CREATE IF NOT EXSIST  
$db = "$projectName";
$conn = mysqli_connect($hostname, $username, $pass, $db);

// DATABASE USER TABLE CREATE IF NOT EXISTS 
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    password VARCHAR(50),
    user_type VARCHAR(20) NOT NULL DEFAULT 'user'
   
)";

$result = mysqli_query($conn, $sql);
