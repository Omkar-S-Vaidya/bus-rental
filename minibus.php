<?php
session_start();
include("connection.php");
include("function.php");
$user_data = check_login($conn);
$_SESSION['minibus1']="https://www.buses.tatamotors.com/wp-content/uploads/2020/06/starbus-24-d-lp-407-36-cng.png";
$_SESSION['minibus1.1']="https://live.staticflickr.com/7626/16139920213_5e0f01aa48_b.jpg";
$_SESSION['minibus1.2']="https://busimg.cardekho.com/p/630x420/in/tata/starbus-staff-contract/tata-starbus-staff-contract.jpg?impolicy=resize&imwidth=480";

?>
<html>
<title>MINIBUS</title>
<head>
<link rel="stylesheet" href="css/home.css">
</head>
<body>
<div class="navbar">
<a class="subname" href="home.php"><?php echo$_SESSION['c_name']?> -MiniBus</a>
</div>
<main>
<div class="tempo">
	<h1>Mini Bus</h1>
<hr>
<div class="tempo-frame">
<div class="section">
<img class="myslide1 fade" src="<?php echo $_SESSION['minibus1']?>">
<img class="myslide1 fade" src="<?php echo $_SESSION['minibus1.1']?>">
<img class="myslide1 fade" src="<?php echo $_SESSION['minibus1.2']?>">
<button class="l1" onclick="plus1(-1)"><</button>
<button class="r1" onclick="plus1(1)">></button>
<a href="1-minibus.php">
<h3><?php $_SESSION['brand']="Tata Starbus LP 407 CNG";echo $_SESSION['brand'];?></h3>
<hr>
<p><b>Seating Capacity:</b> The Tata Starbus LP 407 CNG has a 
seating capacity of up to 27 passengers, including the driver.</p>

<p><b>Engine:</b> It is powered by a 4.5-litre CNG 
engine that delivers a maximum power output 
of 90 bhp and a peak torque of 285 Nm.</p>

<p><b>Dimensions:</b> The dimensions of the Tata
 Starbus LP 407 CNG are 7,200 mm in length, 2,300
 mm in width, and 2,840 mm in height. It has a wheelbase
 of 3,750 mm and a ground clearance of 220 mm.</p>

<p><b>Comfort Features:</b> The bus is equipped with comfortable seats,
 air conditioning, a music system, and ample legroom to provide a 
 comfortable travel experience for passengers.</p>

<p><b>Safety Features:</b> The vehicle comes with features like front and
 rear fog lamps, seat belts for all passengers, and an anti-lock 
 braking system (ABS) that enhance the safety of the passengers.</p>
</div>

<script type="text/javascript" src="js/seat.js"></script>
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