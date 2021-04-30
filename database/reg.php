<?php
session_start();

//session some variables


?>

<?php

require_once('connection.php');
$fname = $lname = $dob = $email = $course = $password = '';

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$course = $_POST['course'];
$pass = $_POST['password'];


$sql = "INSERT INTO users(Firstname, Lastname, Dob, email, course, Password )
VALUES ('$fname', '$lname', '$dob', '$email' , '$course', '$pass')";

$result = mysqli_query($conn, $sql);

if($result)
{
    header("Location: login.php");
}
else
{
    echo "Error :".$sql;
}


?>