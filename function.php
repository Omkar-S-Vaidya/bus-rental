<?php
function check_login($conn){
if(isset($_SESSION['username']) || isset($_SESSION['password']))
{
	
			$us = $_SESSION['username'];
			$ps = $_SESSION['password'];
			$query = "SELECT * FROM users WHERE u_fname='$us' AND password='$ps' limit 1";
			$result = mysqli_query ($conn, $query);
			if($result && mysqli_num_rows($result)> 0)
			{
			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
			}
}
else{
header("Location: login.php");
die;
}
}
?>