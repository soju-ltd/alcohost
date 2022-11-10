<?php

//sql connection

$servername = "localhost";
$user = "root";
$passwd = "";
$dbname = "alcoholic_db";

// Create connection
$conn = mysqli_connect($servername, $user, $passwd,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
 // echo "Connected successfully";


?>
