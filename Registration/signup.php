<?php
session_start();

include ("connect.php");
include ("function.php");

/**we want to check if the user has clicked on the close button */
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $pnumber=$_POST['pnumber'];
    $number=$_POST['number'];
    $password=$_POST['password'];
    $cpass=$_POST['cpass'];

    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($pnumber) && !empty($number) && !empty($password) && !empty($cpass))
    {
        // save into database (random_num is a function that assign a number to a specific user)
        $user_id = random_num(20);
        $query ="INSERT INTO signup_tb (`user_id`, `fname`, `lname`, `email`, `pnumber`, `number`, `password`, `cpass`) VALUES ('[$user_id]','[$fname]','[$lname]','[$email]','[$pnumber]','[$number]','[$password]','[$cpass]')";

        mysqli_query($con, $query);

    header("location: login.php");
    die;

    } else{
        echo "please enter the valid information!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link rel="stylesheet" href="style.css">
   
</head>

<body>
    <section>
        <div class="form-box2">
            <div class="form-value">
            <form method="POST">
            <h1>Registration Form</h1>
        <div class="cont2">
        <ion-icon name="person-outline"></ion-icon>
            <label for="">First Name</label>
            <input type="text"  name="fname" placeholder="enter your first name" required>
        </div>
        <div class="cont2">
        <ion-icon name="person-outline"></ion-icon>
            <label for="">Last Name</label>
            <input type="text" name="lname" placeholder="enter your last name" required>
        </div>
        <div class="cont2">
        <ion-icon name="mail-outline"></ion-icon>
            <label for="">Email <Address></Address></label>
            <input type="email"  name="email" placeholder="enter your email address" required>
        </div>
        <div class="cont2">
        <ion-icon name="call-outline"></ion-icon>
            <label for="">Phonenumber</label>
            <input type="text" name="pnumber" placeholder="enter your phone number" required>
        </div>
        <div class="cont2">
        <ion-icon name="accessibility-outline"></ion-icon>
            <label for="">ID number</label>
            <input type="text" name="number" placeholder="enter your national ID number" required>
        </div>
        <div class="cont2">
        <ion-icon name="lock-closed-outline"></ion-icon>
            <label for="">password</label>
            <input type="password" name="password" placeholder="enter your password" required>
        </div>
        <div class="cont2">
        <ion-icon name="lock-closed-outline"></ion-icon>
            <label for="">Confirm Password</label>
            <input type="password" name="cpass" placeholder="confirm your password" >
        </div>
        <div class="register">
            <p>Already created an account? <a href="login.php">Login</a></p>
        </div>
        <button type="submit">Register</button>
    </form>
            
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>