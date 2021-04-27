<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="./CSS/style.css">
 <link rel="stylesheet" href="./CSS/mediaquery.css">
 <title>Login</title>
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
  margin-top: 10%;
  width: 300px;
  padding: 20px;
 }
 </style>
</head>
<body>
  <?php
session_start();
include("connection.php"); 
include("functions.php"); 

if($_SERVER['REQUEST_METHOD'] == "POST") {
 $user_name = $_POST['user_name'];
 $password = $_POST['password'];
if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
{
 //read from database
 $query = "select * from users where user_name = '$user_name' limit 1";
 $result = mysqli_query($con, $query);
 if($result) {
   if($result && mysqli_num_rows($result) > 0) //If there is a user in result and rows then...
   {
      $user_data = mysqli_fetch_assoc($result); 
      if($user_data['password'] === $password) 
      {
        $_SESSION['user_id'] = $user_data['user_id'];
        header("Location: index.php");
        die;
      }
   }
 }
   echo "Wrong username or password";
 } else
 {
   echo "Please enter some vald information!";
 }
}
?>
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
  <div style="font-size: 20px; margin: 10px; color: white;">Login</div>
  <input id="text" type="text" name="user_name"><br><br>
  <input id="text" type="password" name="password"><br><br>
  <input id="button" type="submit" value="Login"><br><br>
  <a href="signup.php">Click to Signup</a>
  </form>
</div>
</body>
</html>