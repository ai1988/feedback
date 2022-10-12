<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?version=0.06">
    <title>Results</title>
    
</head>
<body>

<div class="header">
    <div class="version">version: 2.1</div>
    <a href="reset.php" class="exp-btn red-btn" onclick="return confirm('Are you sure? All data will be wiped...');"><i class="dwn"></i>Reset ALL</a>
    <a href="export.php" class="exp-btn"><i class="dwn"></i>Download CSV</a>
</div>
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

?>
    <div class="wrapper_admin">
        <div class="holder">
        <form action="question.php" method="post" class="q_form">
            <input type="text" maxlength="60" placeholder="type a question for kiosk terminals..." name="question_input" value="<?php
                    $query = 'SELECT * FROM settings WHERE id = "1"';
                    $result = mysqli_query($conn, $query);
                    
                    
                        while($row = mysqli_fetch_array($result)) {
                            echo $row['question'];
                            // echo 'value=' .$row['question'].'"' ;
                        }
            
            ?>">
            <input type="submit" value="save">
        </form>
        <div class="container" id="refresh"></div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js" integrity="sha512-CX7sDOp7UTAq+i1FYIlf9Uo27x4os+kGeoT7rgwvY+4dmjqV0IuE/Bl5hVsjnQPQiTOhAX1O2r2j5bjsFBvv/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="func.js?version=0.01"></script>
    
    </body>
</html>