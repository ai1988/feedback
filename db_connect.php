<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_db_name";

$conn = new mysqli($servername, $username, $password, $dbname);

date_default_timezone_set('Europe/Istanbul'); // Change to your TIME_ZONE
$now_date = date('Y-m-d');
$now_time = date('H:i:s');

// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// } 
// echo "Connected successfully";
?>
