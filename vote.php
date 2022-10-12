<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voted</title>
    <link rel="stylesheet" href="style.css?version=0.002">
</head>
<body>
    


<div class="wrapper_v">
    <div class="voted">
<?php
        

            if(array_key_exists('button1', $_POST)) {
                button1();
            }
            if(array_key_exists('button2', $_POST)) {
                button2();
            }
            if(array_key_exists('button3', $_POST)) {
                button3();
            }


            function button1() {
                require 'db_connect.php';
                $sql = "INSERT INTO results (choice, local_date, local_time) VALUES ('Good', '$now_date', '$now_time')";
                  if ($conn->query($sql) === TRUE) {
                    echo '<svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"> <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="#10ac84"/> <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>';
                  } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                  }
                  $conn->close();
                header( "refresh:2; url=index.php" );
            }
            function button2() {
                require 'db_connect.php';
                $sql = "INSERT INTO results (choice, local_date, local_time) VALUES ('Normal', '$now_date', '$now_time')";
                  if ($conn->query($sql) === TRUE) {
                    echo '<svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"> <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="#10ac84"/> <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>';
                  } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                  }
                  $conn->close();
                
                header( "refresh:2; url=index.php" );
                
            }
            function button3() {
                require 'db_connect.php';
                $sql = "INSERT INTO results (choice, local_date, local_time) VALUES ('Bad', '$now_date', '$now_time')";
                if ($conn->query($sql) === TRUE) {
                    echo '<svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"> <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="#10ac84"/> <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>';
                  } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                  }
                  $conn->close();
                header( "refresh:2; url=index.php" );
            }    
    ?>  
</div>
</div>
</body>
</html>