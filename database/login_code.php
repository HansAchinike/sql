<?php

require_once('connection.php');
$email = $password = '';

$email = $_POST['email'];
$pass = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email' AND Password = '$pass'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0)
{
    while ($row = mysqli_fetch_assoc($result))
     {
        $id = $row["ID"];
        $email = $row["email"];

        session_start();
        $_SESSION['id'] = $id;
        $_SESSION['email'] = $email;
    }
    header("Location: welcome.php");
}
else
{
    echo "Invalid email or password";
}

?>