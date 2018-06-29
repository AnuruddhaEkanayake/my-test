<?php

$servername = "localhost";
$database = "student";
$username = "root";
$password = "";


$con = mysqli_connect($servername,$username,$password,$database);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  

// echo "Connected successfully";


?>