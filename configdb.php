<?php
date_default_timezone_set('Asia/Bangkok');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sqa_customer_v3";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>