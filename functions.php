<?php

function check_login($con) //Checking the login from database
{
  if(isset($_SESSION['user_id'])) // If there is a user in session...
  {
   $id = $_SESSION['user_id']; // Variable session id
   $query = "select * from users where user_id = '$id' limit 1"; // Query to search the database for the current id.
   $result = mysqli_query($con, $query); // Search the database and return the result of querying user id.
   if($result && mysqli_num_rows($result) > 0) //If there is a user in result and rows then...
   {
      $user_data = mysqli_fetch_assoc($result); //Fetches users data
      return $user_data; //Returns users data
   }
  }

  //redirect to login
  header("Location: Login.php"); 
  die;
}

function random_num($length)
{
$text = "";
if($length < 5)
{
 $length = 5;
}
$len = rand(4, $length);
for ($i=0; $i < $len; $i++) {

   $text .= rand(0,9);
}
return $text;
}