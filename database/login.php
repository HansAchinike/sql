<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Login page</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assests/css/style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body style="background-color: #f1d6a9">
    <h1>Sign In</h1>
    <form method="POST" action="login_code.php">

        <label for="email">Email Address</label>
        <input type="text" name="email" class="form-control" placeholder="Email" required><br>
        
        <label for="password">Password</label>
        <input type="password"  class="form-control" name="password" placeholder="Password" required><br>
        
        <button type="submit" name="submit" class="btn btn-success btn-lg btn-block"> Login </button><br>
       
       
        <div class="text-center">Dont have an account? <a href='register.html'>Register Here</a><br> Forgot Password? <a href="reset.php">Reset Password</a></div>
    
    </form>

</body>

</html>
