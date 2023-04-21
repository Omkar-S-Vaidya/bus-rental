<?php
session_start();
include("connection.php");
include("function.php");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];
	$query="SELECT * FROM users WHERE u_fname='$username' AND password='$password'";
	$result= mysqli_query($conn,$query);
	if(mysqli_num_rows($result)>0)
	{
		$user_data = mysqli_fetch_assoc($result);
		if($user_data['password']==$password){
		header("Location:home.php");
		}
		else
		{
			echo "password or username incorrect";
		}
	}
	else
		{
			echo "password or username incorrect";
		}
	
}
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;
?>

<html>
<title>LOGIN PAGE</title>
<head>
<link rel="stylesheet" href="css/login.css">
</head>
<body>
<form class="img" action="login.php" method="post">
<div class="con">
<h1>LOGIN</h1>
<label for="username"><b>User Name(first name):</b></label>
<input type="text" name="username" placeholder="Enter Username" required>
<label for="password"><b>Password:</b></label>
<input type="password" name="password" placeholder="Enter Password" required>
<input type="submit" value="Login" class="btn">
<p><a href="register.php">Register</a></p>
</div>
</form>
</body>
</html>