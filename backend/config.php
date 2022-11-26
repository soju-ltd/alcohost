<?php

//sql connection

//user config
$servername = "localhost";
$user = "";
$passwd = "";
$dbname = "";

// Create connection
$conn = mysqli_connect($servername, $user, $passwd,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
 // echo "Connected successfully";


?>
