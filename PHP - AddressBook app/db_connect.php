<?php
    

     //Database connection varibles | on local machine
     $server = "localhost";
     $username = "root";
     $password = "";
     $db = "my_dev_db_use";
    

    //Create a connection
    $conn = mysqli_connect($server, $username, $password, $db);
    
    if (!$conn){
        die("Connection failed: " . $mysqli_connect_error() );
    }
    //echo "Connected Successfully!";

    
?>