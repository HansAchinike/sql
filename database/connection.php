<?php


// Create connection
$conn = mysqli_connect("localhost","root", "", "mydb");

// Check connection
if(!$conn) 
{
  echo "Database connection failed....";
}
?>
