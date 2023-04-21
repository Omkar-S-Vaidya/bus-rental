<?php
session_start();
include("D:/XAAMP/htdocs/bus rental/connection.php");
include("D:/XAAMP/htdocs/bus rental/function.php");
$query="SELECT * FROM booking WHERE 1";
$query3="SELECT * FROM `company-name` WHERE 1";
$result=mysqli_query($conn,$query);
$result3=mysqli_query($conn,$query3);
if(mysqli_num_rows($result3)>0){
	$c_name=mysqli_fetch_assoc($result3);
	$_SESSION['c_name']=$c_name['c_name'];		
		
	}
	else{
		echo"error";
	}
$Edate=date("Y-m-d");
if($_SERVER['REQUEST_METHOD']=='POST'){
	$company_name= $_POST['cname'];
	if(strlen($company_name)>=4){
		echo '<script type="text/javascript">alert("company name must be less than 4 character");</script>';
	}
	else{
		$query2="UPDATE `company-name` SET `c_name`='$company_name' WHERE `c_id`='1'";
		$result2=mysqli_query($conn,$query2);
	}
	
	$query1="DELETE FROM `booking` WHERE edate<='$Edate'";
		$result1=mysqli_query($conn,$query1);
}
?> 
<html>
<title>TEMOP</title>
<head>
<link rel="stylesheet" href="css/home.css">
</head>
<body>
<div class="navbar">
<a class="subname" href="http://localhost/bus%20rental/home.php"><?php echo$_SESSION['c_name']?>-Admin</a>
</div>
<main>
<form method='post' action='admin-home.php' style="margin-top:50px;margin-left:20px;margin-bottom:50px">
<label for="cname">Company name:</label>
<input name="cname" type="text" value="<?php echo $_SESSION['c_name'];?>" >
<br>
<br>
<hr>
<br>
<label for="date">Check End Date:</label>
<p>
<?php
	if(mysqli_num_rows($result)>0){
		$n=1;
		while($row=mysqli_fetch_assoc($result)){
			echo("ID : ".$row['p_id'] ."<br>"."Vehicel : ".$row['vehicel'] ."<br>"."Start_Date : ".$row['sdate'] ."<br>"."End_Date : ".$row['edate'] ."<br>"."<br><br>");						
		}
	}
	else{
		echo"error";
	}

?>
</p>
<button type='submit'>check</button>
</form>



<footer>
<h2>@Social Media</h2>
<div class="lg lg1"><a href="#"><img src="https://cdn-icons-png.flaticon.com/512/5968/5968764.png"></a></div>
<div class="lg"><a href="#"><img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png"></a></div>
<div class="lg"><a href="#"><img src="https://cdn-icons-png.flaticon.com/512/3670/3670051.png"></a></div>
<div class="lg"><a href="#"><img src="https://cdn-icons-png.flaticon.com/512/732/732200.png"></a></div>
</footer>
</main>
</body>
</html>