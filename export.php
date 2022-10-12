<?php 
 
// Load the database configuration file 
include_once 'db_connect.php'; 
 
// Fetch records from database 
$query = $conn->query("SELECT * FROM results ORDER BY id ASC"); 

 
if($query -> num_rows > 0) {
    $delimiter = ","; 
    $filename = "cafeteria_feedbacks_" . date('Y-m-d') . ".csv"; 
     
    $f = fopen('php://memory', 'w');
     
    $fields = array('ID', 'CHOICE', 'LOCAL DATE', 'LOCAL TIME'); 
    fputcsv($f, $fields, $delimiter); 
     
    while($row = $query->fetch_assoc()){ 
        $lineData = array($row['id'], $row['choice'], $row['local_date'], $row['local_time']); 
        fputcsv($f, $lineData, $delimiter); 
    } 
     
    fseek($f, 0); 
     
    header('Content-Type: text/csv'); 
    header('Content-Disposition: attachment; filename="' . $filename . '";'); 
     
    fpassthru($f); 
}

else {
    echo '<script>alert("No data to work with, to export CSV you need at least one vote!")</script>';
    header( "refresh:0.1; url=admin.php" );
}

exit; 
 
?>