<?php
    require('db_connect.php');














    include('db_connect.php');
      $query = "SELECT * FROM users";
        $result = mysqli_query($conn, $query);

        if( mysqli_num_rows($result) > 0){

            echo "<table class='table bordered'><tr><th>ID</th><th>Username</th><th>Email</th></tr>";


            //Dislpay output
            while($row = mysqli_fetch_assoc($result) ){


               echo "<tr><td>".$row['id']."</td><td>".$row['username']."</td><td>".$row['email']."</td></tr>";


            }
            echo "<table>";

        } else {
            echo "No users found";
        }

        //Close connection
        mysqli_close($conn);
    
    




?>

    



