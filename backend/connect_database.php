<?php
session_start();
$servername = "localhost";
$database = "db_gcu";
$username = "root";
$password = "";

// Create connection
 $conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


?>