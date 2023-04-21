<?php
if(strlen($password)<=7)
	{
		echo"Password must be at least 8 characters";
	}
	 
	elseif(!preg_match('/[A-Z]/', $password) || !preg_match('/[a-z]/', $password) || !preg_match('/[0-9]/', $password)|| !preg_match('/[\W]/', $password)) 
	{
		echo"password must contains at least one uppercase letter,lower letter,one number,special characters";
	}

	elseif(mysqli_query($conn,$query))
	{
		header("Location:login.php");
		die;
	}
	else
	{
		echo"error : ".mysqli_error($conn);
	}
?>