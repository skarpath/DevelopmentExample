<?php

    //Varibles
    $formError="";
    $username="";
    $password="";

    if( isset ( $_POST["login_submit"] ) )  {
        
        
        //Check for valid characters WILL CHANGE THIS LATER to regular expressions depending on type of input
        function validateFormData( $formData) {
            $formData = trim ( stripslashes(htmlspecialchars ( $formData ) )); 
            return $formData;    
        }
        
        //Check if 
        if (!$_POST["username"] ) {
            $formError .= "Please enter a username";
        }
        else {
            $username = validateFormData( $_POST["username"]);
        }                             
       
                              
        if (!$_POST["password"] ) {
            $formError .= "<br>Please enter a password<br>";
        }
        else {
            $password = validateFormData( $_POST["password"]);
        }
                                            
        //Connect to database get user info   - CHANGE THIS INTO A FUNCTION
        if( $username != "" && $password != ""){
            include("db_connect.php");
            $query = "SELECT username, email, password FROM users where username='$username'";
            
            $result = mysqli_query($conn, $query);
            
            if(mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    $username = $row['username'];
                    $email  = $row['email'];
                    $hashedPass = $row['password'];
                    
                    //Stopped at 9min
                }
            }
        }
    }//End of post check
  

?>



<!DOCTYPE html>

<html>
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Site Login</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body>
        <div class="container">
            <h1>User Login</h1>
            <p class="lead">Use this form to login</p>
            
            <form class="form-inline" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post">
                
                <?php echo $formError; ?>
                <input type="text" class="form-control" id="login-password"  placeholder="Username" name="username">
                <input type="password" class="form-control" id="login-password" placeholder="Password" name="password">
                
                <input type="submit" class="btn btn-default" name="login_submit" value="Submit">
            
            </form>
      
            
           
        </div>
        
        <!-- jQuery -->
        <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
        
        <!-- Bootstrap JS -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>