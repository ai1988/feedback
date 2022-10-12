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

<?php
    include_once 'db_connect.php';
    $question_input =  $_REQUEST['question_input'];
    $question_put = "UPDATE settings SET question='$question_input' WHERE id='1'";
                  if ($conn->query($question_put) === TRUE) {
                    echo '<div class="wrapper_feedback_page">';
                    echo '<h2 class="saved">Saved!</h2>';
                    echo '</div>';
                  } else {
                    echo "Error: " . $question_put . "<br>" . $conn->error;
                  }
                  $conn->close();
                header( "refresh:1.7; url=admin.php" );

?>

    </body>
    </html>




