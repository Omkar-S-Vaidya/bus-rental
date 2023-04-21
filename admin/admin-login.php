<?php
session_start();
include("D:/XAAMP/htdocs/bus rental/connection.php");
include("D:/XAAMP/htdocs/bus rental/function.php");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$adminname=$_POST["adminname"];
	$password=$_POST["password"];
	$query="SELECT * FROM admin WHERE a_name='$adminname' AND password='$password'";
	$result= mysqli_query($conn,$query);
	if(mysqli_num_rows($result)>0)
	{
		$user_data = mysqli_fetch_assoc($result);
		if($user_data['password']==$password){
		header("Location:admin-home.php");
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
?>

<html>
<title>ADMIN</title>
<head>
<link rel="stylesheet" href="css/login.css">
</head>
<body>
<form class="img" action="admin-login.php" method="post">
<div class="con">
<h1>ADMIN</h1>
<label for="adminname"><b>Admin Name:</b></label>
<input type="text" name="adminname" placeholder="Enter Adminname" required>
<label for="password"><b>Password:</b></label>
<input type="password" name="password" placeholder="Enter Password" required>
<input type="submit" value="Login" class="btn">
</div>
</form>
</body>
</html>