<?php

require_once 'db_connect.php';

$query = $conn->query("DELETE FROM results WHERE id > 0");
$query2 = $conn->query("ALTER TABLE results AUTO_INCREMENT = 1");
header( "refresh:0.1; url=admin.php" );
?>



