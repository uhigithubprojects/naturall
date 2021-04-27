<?php
// This is the version you would use ordinarily...

// Sets up the connection parameters to a mysql database

// To use you edit the parameters into the '' below

// If connection fails it's usually one of the parameters has been mistyped
// or the server's down...


DEFINE ('DB_USER', 'IN18006234');                           // The username
DEFINE ('DB_PASSWORD','18006234');                        // The password
DEFINE ('DB_HOST', 'localhost');                        // The mysql server host address 
DEFINE ('DB_NAME', 'IN18006234');                           // The database name
if (!$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME))
  {
  die('Failed to connect to database ');
  }
?>