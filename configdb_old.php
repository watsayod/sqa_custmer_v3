<?php
date_default_timezone_set('Asia/Bangkok');
$servername = "203.154.158.2";
$username = "inetsqa";
$password = "inetsqa@Pass01";
$dbname = "sqa_customer_v3";
$port = "6022";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);
mysqli_set_charset($conn, "utf8");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>