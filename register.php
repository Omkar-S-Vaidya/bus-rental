<?php
include("connection.php");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$email=$_POST["email"];
	$firstname=$_POST["firstname"];
	$middlename=$_POST["middlename"];
	$lastname=$_POST["lastname"];
	$password=$_POST["password"];
	$query="INSERT INTO `users`(`u_email`, `u_fname`,`u_mname`,`u_lname`, `password`) VALUES ('$email','$firstname','$middlename','$lastname','$password')";
	include("password-manage.php");

	mysqli_close($conn);

	
}
?>

<html>
<title>REGISTER PAGE</title>
<head>
<link rel="stylesheet" href="css/login.css">
</head>
<body>
<form class="img" action="register.php" method="post">
<div class="con">
<h1>Register</h1>
<label for="email"><b>Email:</b></label>
<input type="email" name="email" placeholder="Enter Email" required>
<label for="firstname"><b>First Name:</b></label>
<input type="text" name="firstname" placeholder="Enter Firstname" required>
<label for="middlename"><b>Middle Name:</b></label>
<input type="text" name="middlename" placeholder="Enter Middlename" required>
<label for="lastname"><b>Last Name:</b></label>
<input type="text" name="lastname" placeholder="Enter Lastname" required>
<label for="password"><b>Password:</b></label>
<input type="password" name="password" placeholder="Enter Password" required>
<input type="submit" value="Register" class="btn">
<p><a href="login.php">Login</a></p>
</div>
</form>
</body>
</html>