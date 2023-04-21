<?php
$host="localhost";
$username="root";
$password="";
$database="busrental";
$conn=mysqli_connect($host,$username,$password,$database);
if(!$conn)
{
	die("connection Fail : ".mysqli_connect_errno($conn));
}

?>