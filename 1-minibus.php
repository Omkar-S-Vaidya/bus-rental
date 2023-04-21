<?php
session_start();
include("connection.php");
include("function.php");
$user_data = check_login($conn);
$vehicel=$_SESSION['brand'];
	$query="SELECT * FROM booking WHERE vehicel='$vehicel' ";
	$result=mysqli_query($conn,$query);
	$r_num=mysqli_num_rows($result);
if($_SERVER['REQUEST_METHOD']=="POST")
{
	$start_date=$_POST['start'];
	$end_date=$_POST['end'];
	$name=$_POST['name'];
	$address=$_POST['address'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$_SESSION['start_date']=$start_date;
	$_SESSION['end_date']=$end_date;
	$_SESSION['email']=$email;
	$_SESSION['mobile']=$mobile;
	$_SESSION['name']=$name;
	$_SESSION['address']=$address;
	$edate=strtotime($end_date);
	$sdate=strtotime($start_date);
	$days=($edate-$sdate)/(60*60*24);
	$_SESSION['amount']=5300*$days;
	$_SESSION['m_type']=$_SESSION['brand'];
	$_SESSION['tempo_type']=$_SESSION['minibus1'];
	if($r_num==1){
		echo '<script type="text/javascript">alert("this vehical currently not available");</script>';
	}
	elseif($edate<$sdate){
		echo '<script type="text/javascript">alert("invalide date");</script>';
	}
	else{
		header("Location:final-1-tempo.php");
		die;
	}
}
?>

<html>
<title><?php echo $_SESSION['brand'];?></title>
<head>
<link rel="stylesheet" href="css/home.css">
</head>
<body>
<div class="navbar">
<a class="subname" href="minibus.php"><?php echo$_SESSION['c_name']?> - <?php echo $_SESSION['brand'];?></a>
</div>
<main>
<div class="prod">
<div class="imgdis">
<img class="myslide" src="<?php echo $_SESSION['minibus1'];?>">
<img class="myslide" src="<?php echo $_SESSION['minibus1.1'];?>">
<img class="myslide" src="<?php echo $_SESSION['minibus1.2'];?>">
<img class="bnt" onclick="plus(1)" src="<?php echo $_SESSION['minibus1'];?>">
<img class="bnt" onclick="plus(2)" src="<?php echo $_SESSION['minibus1.1'];?>">
<img class="bnt" onclick="plus(3)" src="<?php echo $_SESSION['minibus1.2'];?>">
<script type="text/javascript" src="js/final-product.js"></script>
</div>
<div class="details">
<form action="1-minibus.php" method="post" >
<div class="form">
<h1> <?php echo $_SESSION['brand'];?></h1>
<br>
<span class="date">
<label for="start"><b>Start Date: </b></label>
<input name="start" type="date" placeholder="Start Date" min='<?php $date=date("Y-m-d"); echo $date;?>' required >
<label for="end"><b> <span style="color:blue;"> to</span> End Date:</b></label>
<input name="end" type="date" placeholder="End Date" min='<?php $date=date("Y-m-d"); echo $date;?>' required>
</span>
<br>
<br>
<br>
<label for="name"><b>Name:</b></label>
<br>
<input name="name" type="text"placeholder="Full Name"required>
<br>
<label for="name"><b>Full Address:</b></label>
<br>
<textarea name="address" placeholder="Address" required ></textarea>
<br>
<label for="name"><b>Email(in use):</b></label>
<br>
<input name="email" type="email"placeholder="Email"required>
<br>
<label for="name"><b>Mobile-no:</b></label>
<br>
<input name="mobile" type="number" min="7777777777" max="9999999999"placeholder="Mobile Number"required>
<br>
<button class="btn">Rent Now</button>
</div>
</form>
</div>
</div>

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