<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset ="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS main stylesheet -->
  <link rel="stylesheet" type="text/css" href="./CSS/style.css"/>
  <!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  <title>Document</title>
</head>
<body>
<header>
    <h1>UHI Tunes</h1>
</header>
<?php
  include("DbConnect.php");              // Add in the database connection details

  // Now get the information from the Form
  $Email	 = $_POST['Email'];
  $Password 	 = $_POST['Password'];
  
//echo $Email;
//echo $Password;
  

  
  $Query = "SELECT ID,emailAddress,password FROM userLogin
  WHERE  emailAddress = '$Email'
  AND password ='$Password'";
  
//   Now run the query - i.e. Query the data in the table
  
  $Result = mysqli_query($DB,$Query);	 // $Result gives us a numeric value to check if the query found a match ok. 
				 	 
									   
  $NumResults = mysqli_num_rows($Result);	
  							   
// echo $NumResults;

  if ($NumResults==1)
	{ 
	echo '<h2>'.'Found user with matching password'.'</h2>';
//	Now find the associated User no
	$row=mysqli_fetch_assoc($Result);
//	$UserNo=$row[0]; // done with mysqli_fetch_row($Result) OR
	$UserNo=$row['ID']; // mysqli_fetch_assoc($Result);

//	it's the first element - element 0 - from the row array if using line 35

	echo '<br/>Associated User no is  '.$UserNo; // or 'UserNo' if line 36
//	echo '<h3>Associated User no is  '.$UserNo.'</h3>'; // or 'UserNo' if line 36

	}  
  else
	echo '<h2>'.'User not found OR wrong password OR both OR multiple matches found'.'</h2';


?>  
</body>
<footer>

</footer>
</html>
