<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS main stylesheet -->
    <link rel="stylesheet" href="./CSS/style.css" />
     <!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <title>Home Page</title>
  </head>
<?php
session_start();
include("DbConnect.php"); 
include("functions.php");
  $user_data = check_login($con);
  ?>
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
  </body>
</html>
