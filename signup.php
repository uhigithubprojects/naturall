<?php
session_start();
include("connection.php"); // Connect to the database
include("functions.php"); // Make sure the user 

if($_SERVER['REQUEST_METHOD'] == "POST") {
 $user_name = $_POST['user_name'];
 $password = $_POST['password'];
if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
{
 //save to database
 $user_id = random_num(20);
 $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

 mysqli_query($con, $query);
 header("Location: login.php");
 die;
 } else
 {
   echo "Please enter some vald information!";
 }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="./CSS/style.css">
 <title>Signup</title>
  <style type="text/css">
  #text{
   height: 25px;
   border-radius: 5px;
   padding: 4px;
   border: solid thin #aaa;
   width: 100%;
  }
 #button {
  padding: 10px;
  width: 100px;
  color: white;
  background-color: lightblue;
  border: none;
 }
 #box {
  background-color: grey;
  margin: auto;
  width: 300px;
  padding: 20px;
 }
 </style>
</head>
<body>
      <header>
       <img src="Images/Logo 70px.png" alt="logo" id="logo" />
        <!--Logo-->
      <nav>
        <ul class="nav_links">
          <li><a href="./index.html">Home</a></li>
          <li><a href="./merchandise.php">Merchandise</a></li>
          <li><a href="./about.html">About</a></li>
          <li><a href="./contactUs.html">Contact Us</a></li>
        </ul>
      </nav>
      <button class="dropbtn">
        <i class="fas fa-bars"></i>
      </button>
      <a href="basket.php" id="Basket"><i class="fas fa-shopping-cart"></i></a>
    </header>
    <div class="mobileNav show-links">
        <ul>
          <li><a href="./index.html">Home</a></li>
          <li><a href="./merchandise.php">Merchandise</a></li>
          <li><a href="./about.html">About</a></li>
          <li><a href="./contactUs.html">Contact Us</a></li>
          <li><a href="./basket.php">Basket</a></li>
        </ul>
      </div>
<div id="box">
  <form method="post" action="#">
  <div style="font-size: 20px; margin: 10px; color: white;">Signup</div>
  <input id="text" type="text" name="user_name"><br><br>
  <input id="text" type="password" name="password"><br><br>
  <input id="button" type="submit" value="Signup"><br><br>
  <a href="Login.php">Click to Login</a>
  </form>
</div>
</body>
</html>