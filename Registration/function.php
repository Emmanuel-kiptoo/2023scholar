<?php

function check_login($con){
    /**user_id is the user data/person logged in if available or not */
    if(isset($_SESSION['user_id']))/**we are checking if the user_id value is set */
    {
        $id = $_SESSION['user_id'];

        $query = "SELECT * FROM signup_tb WHERE user_id = '$id' limit 1 ";
        
        /**to get the results from the database do this */
        $result = mysqli_query($con,$query);

        /**$result checks if the query is positive and then check the number of rows is equals to zero then continue */
        if($result && mysqli_num_rows($result) > 0)
        {
            /** user the $user_data variable to fetch for an associative array from the results then return the user data */
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }

    } 
    // redirect to login
    header("location: login.php");
    die;
    
}

function random_num ($length) 
{
$text = "";
if($length < 5)
{
    $length = 5;
}
$len = rand(4,$length);

//for is a for loop , it repeats the number of times 
for ($i=0; $i < $len; $i++)
{
    # code...

    $text .= rand(0,9);
}

return $text;
}