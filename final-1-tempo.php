<?php
session_start();
include("connection.php");
include("function.php");
$user_data = check_login($conn);

if($_SERVER['REQUEST_METHOD']=="POST"){
	$vechicel=$_SESSION['m_type'];
	$email=$_SESSION['email'];
	$start_date=$_SESSION['start_date'];
	$end_date=$_SESSION['end_date'];
	$mobile=$_SESSION['mobile'];
	$address=$_SESSION['address'];
	$name=$_SESSION['name'];
	$amount=$_SESSION['amount'];
	$u_id=$user_data['id'];
	$query="INSERT INTO `booking`( `u_id`, `vehicel`,`name`,`email`, `sdate`, `edate`,`mobile-no`, `address`, `amount`) VALUES ('$u_id','$vechicel','$name','$email','$start_date','$end_date','$mobile','$address','$amount')";
	$result=mysqli_query($conn,$query);
	if($result){
		header("Location: thankyou.php");
		die;
	}
}

?>

<html>
<title><?php echo $_SESSION['m_type'];?></title>
<head>
<link rel="stylesheet" href="css/home.css">
</head>
<body>
<div class="navbar">
<a class="subname" href="home.php"><?php echo$_SESSION['c_name']?> - <?php echo $_SESSION['m_type'];?>-Payment</a>
</div>
<main>
<form action="final-1-tempo.php" method="post">
<div class="payment" style="font-family:cursive;">
<h1>Payment</h1>
<hr>
<div class="divide">
<p><b><?php echo $_SESSION['m_type'];?></b></p>
<img src="<?php echo $_SESSION['tempo_type'];?>">
</div>
<p><b>Name:</b><?php echo $_SESSION['name'];?></p>
<p><b>Email:</b><?php echo $_SESSION['email'];?></p>
<p><b>Start Date:</b><?php echo $_SESSION['start_date'];?></p>
<p><b>End Date:</b> <?php echo $_SESSION['end_date'];?></p>
<p><b>Mobile:</b> <?php echo $_SESSION['mobile'];?></p>
<p><b>Address:</b> <?php echo $_SESSION['address'];?></p>
<p><b>Amount:</b> <?php echo $_SESSION['amount'];?></p>


<button class="btn1" type="submit">Payment</button>
</div>
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

