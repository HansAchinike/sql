<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
<title>Change Course</title>
</head>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<body style="background-color: #f1d6a9">    
    
<form method="POST">

<h2> Change Course</h2><br><br>

<input type="text" name="email" placeholder="Email" required><br>

</select><br>
<label for="course">Change Course</label>
<select id="course" name="course" required>
		<option disabled selected value>-select a course-</option>
		<option value="php">PHP</option>
		 <option value="python">Python</option>
		<option value="nodejs">Node.Js</option>
</select><br><br>
<button type="submit" name="submit"> Submit </button>
</form>

<?php

require_once('connection.php');
     if (isset($_POST['submit'])) {
         $course = $_POST['course'];
         $email = $_POST['email'];

         
         $sql = "UPDATE users SET course = '$course' WHERE email = '$email'";

         if (mysqli_query($conn, $sql))
         {
             echo "<p>Your Course Has Been Updated Successfully!";
         }
         mysqli_close($conn);

          
     
 }
         
         
 ?>


<a href="welcome.php">Back To Homepage</a>

</body>
</html>

