<?php
session_start();
include ("connect.php");
include ("function.php");

/**$user data is a variable  created to collect users data and check_login is a fuction created to connect with the database  */
$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome page</title>
</head>
<body>
    <a href="logout.php">logout</a>
    <h2>karibu sana mkuu</h2> 
    <br>
     Hello <?php echo $user_data ['fname']; ?>
     
    This is the main page
    
</body>
</html>