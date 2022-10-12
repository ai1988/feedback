<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?version=0.007">
    <title>Feedback</title>
</head>
<body>
    <div class="wrapper_feedback_page">
        <?php
        include_once 'db_connect.php';
        $query = 'SELECT * FROM settings WHERE id = "1"';
        $result = mysqli_query($conn, $query);
        
        
            while($row = mysqli_fetch_array($result)) {
            //echo $row['question']; 
            echo '<div class="question">';
            echo '<h1> '. $row['question'] .' </h1>';
            echo '</div>';
            }   
        ?>

        <form method="post" action="vote.php" class="fd_form">
            <input type="submit" name="button1" class="button" id="btn1" />
            <input type="submit" name="button2" class="button" id="btn2" />
            <input type="submit" name="button3" class="button" id="btn3" />
        </form>
    </div>
</body>
</html>