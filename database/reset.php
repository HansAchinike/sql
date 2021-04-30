<!DOCTYPE html>
<html>
<head>
    <title>Reset password</title>
</head>
<body style="background-color: #f1d6a9">
    <h1>Reset Password</h1>
    <form method="POST">
        <input type="text" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="New Password" required><br>
        <button type="submit" name="submit"> Reset Password </button>
        <a href="login.php">Sign in</a>
       
       <?php

       require_once('connection.php');
            if (isset($_POST['submit'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];

                
                $sql = "UPDATE users SET Password = '$password' WHERE email = '$email'";

                if (mysqli_query($conn, $sql))
                {
                    echo "<p>Password Updated Successfully!";
                }
                mysqli_close($conn);

                 
            
        }
                
                
        ?>
    </form>
</body>

</html>
