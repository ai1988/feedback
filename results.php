
<?php

require "db_connect.php";
$query1 = 'SELECT id FROM results WHERE choice = "Good"';
$result1 = mysqli_query($conn, $query1);
$row1 = mysqli_num_rows($result1);

$query2 = 'SELECT id FROM results WHERE choice = "Normal"';
$result2 = mysqli_query($conn, $query2);
$row2 = mysqli_num_rows($result2);

$query3 = 'SELECT id FROM results WHERE choice = "Bad"';
$result3 = mysqli_query($conn, $query3);
$row3 = mysqli_num_rows($result3);
//header( "refresh:2; url=results.php" );

?>




        <div class="item">
            <h2>Good</h2>
            <span><?php echo $row1 ?></span>
        </div>
        <div class="item">
            <h2>Normal</h2>
            <span><?php echo $row2 ?></span>
        </div>
        <div class="item">
            <h2>Bad</h2>
            <span><?php echo $row3 ?></span>
        </div>


    