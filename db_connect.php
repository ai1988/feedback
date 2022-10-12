<?php
$servername = "localhost";
$username = "fabadmin";
$password = "NJ0-S/Hxe_g!]9GC";
$dbname = "feedback";

$conn = new mysqli($servername, $username, $password, $dbname);

date_default_timezone_set('Europe/Istanbul');
$now_date = date('Y-m-d');
$now_time = date('H:i:s');
//$now_time = date('')

// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// } 
// echo "Connected successfully";
?>