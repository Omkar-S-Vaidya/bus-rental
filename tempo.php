<?php
session_start();
include("connection.php");
include("function.php");
$user_data = check_login($conn);
$_SESSION['tempo1']="https://www.simplytrip.in/images/Tempo-Traveller-Lineup.png";
$_SESSION['tempo2']="https://5.imimg.com/data5/SELLER/Default/2022/7/KX/WY/KN/7195121/17-seater-tempo-traveler-on-rent-luxury-vehicle-500x500.jpg";
$_SESSION['tempo3']="https://5.imimg.com/data5/SELLER/Default/2022/6/VO/OW/OQ/6073471/non-ac-20-seater-tempo-traveller-rental-1000x1000.jpg";
$_SESSION['tempo1.1']="https://5.imimg.com/data5/SELLER/Default/2021/3/OX/KC/VN/5515086/13-seater-tempo-traveller-rent-in-mumbai-1000x1000.jpeg";
$_SESSION['tempo1.2']="https://5.imimg.com/data5/JO/OM/IJ/SELLER-84993296/tempo-traveller-on-rent-250x250.jpg";
$_SESSION['tempo2.1']="https://keralacars.in/wp-content/uploads/2020/10/tempo-traveller-17-seat-interior.jpg";
$_SESSION['tempo2.2']="https://5.imimg.com/data5/BK/SY/MY-7195121/17-seater-tempo-traveller-on-rent-luxury-vehicle-500x500.jpg";
$_SESSION['tempo3.1']="data:image/jpeg;base64,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";
$_SESSION['tempo3.2']="https://punetours.com/wp-content/uploads/2021/01/20-seater-Tempo-Travller.jpg";
?>
<html>
<title>TEMOP</title>
<head>
<link rel="stylesheet" href="css/home.css">
</head>
<body>
<div class="navbar">
<a class="subname" href="home.php"><?php echo$_SESSION['c_name']?> -Tempo</a>
</div>
<main>
<div class="tempo">
	<h1>Tempo Travellers</h1>
<hr>
<div class="tempo-frame">
<div class="section">
<img class="myslide1 fade" src="<?php echo $_SESSION['tempo1']?>">
<img class="myslide1 fade" src="<?php echo $_SESSION['tempo1.1']?>">
<img class="myslide1 fade" src="<?php echo $_SESSION['tempo1.2']?>">
<button class="l1" onclick="plus1(-1)"><</button>
<button class="r1" onclick="plus1(1)">></button>
<a href="1-tempo.php">
<h3><?php $_SESSION['brand']="Force Traveller 3350";echo $_SESSION['brand'];?></h3>
<hr>
<p><b>Seating Capacity:</b> The Force Traveller 12-seater has 
a seating capacity of up to 12 passengers, including the driver.</p>

<p><b>Engine:</b> It is powered by a 2.6-litre diesel engine that 
delivers a maximum power output of 60 bhp and a peak torque of 158 Nm.</p>

<p><b>Dimensions:</b> The dimensions of the Force Traveller
 12-seater are 5,995 mm in length, 2,190 mm in width, 
 and 2,590 mm in height. It has a wheelbase of 3,550 mm
 and a ground clearance of 210 mm.</p>

<p><b>Comfort Features:</b> The bus is equipped with comfortable seats,
 air conditioning, a music system, and ample legroom to provide a 
 comfortable travel experience for passengers.</p>

<p><b>Safety Features:</b> The vehicle comes with features like front and
 rear fog lamps, seat belts for all passengers, and an anti-lock 
 braking system (ABS) that enhance the safety of the passengers.</p></a>
</div>


<div class="section">
<img class="myslide2 fade" src="<?php echo $_SESSION['tempo2']?>">
<img class="myslide2 fade" src="<?php echo $_SESSION['tempo2.1']?>">
<img class="myslide2 fade" src="<?php echo $_SESSION['tempo2.2']?>">
<button class="l1" onclick="plus2(-1)"><</button>
<button class="r1" onclick="plus2(1)">></button>

<a href="2-tempo.php">
<h3><?php $_SESSION['brand1']="Force Traveller 3700";echo $_SESSION['brand1'];?></h3>
<hr>
<p><b>Seating Capacity:</b> The Force Traveller 3700 has a seating 
capacity of up to 17 passengers, including the driver.</p>

<p><b>Engine:</b> It is powered by a 3.2-litre diesel engine 
that delivers a maximum power output of 99 bhp and a peak torque of 300 Nm.</p>

<p><b>Dimensions:</b> The dimensions of the Force Traveller 3700 are 7,120 mm in 
length, 2,040 mm in width, and 2,740 mm in height. It has a wheelbase of 4,075 mm 
and a ground clearance of 200 mm.</p>

<p><b>Comfort Features:</b>  The bus is equipped with comfortable seats, 
air conditioning, a music system, and ample legroom to provide
 a comfortable travel experience for passengers.</p>

<p><b>Safety Features:</b> The vehicle comes with features like front
 and rear fog lamps, seat belts for all passengers, and an anti-lock
 braking system (ABS) that enhance the safety of the passengers.</p> </a>                       
</div>


<div class="section">
<img class="myslide3 fade" src="<?php echo $_SESSION['tempo3']?>">
<img class="myslide3 fade" src="<?php echo $_SESSION['tempo3.1']?>">
<img class="myslide3 fade" src="<?php echo $_SESSION['tempo3.2']?>">
<button class="l1" onclick="plus3(-1)"><</button>
<button class="r1" onclick="plus3(1)">></button>

<a href="3-tempo.php">
<h3><?php $_SESSION['brand2']="Force Traveller 4020 Super";echo $_SESSION['brand2'];?></h3>
<hr>
<p><b>Seating Capacity:</b> The Force Traveller 4020 Super has a seating capacity 
of up to 20 passengers, including the driver.</p>

<p><b>Engine:</b> It is powered by a 3.9-litre diesel engine that delivers
 a maximum power output of 112 bhp and a peak torque of 350 Nm.</p>
 
<p><b>Dimensions:</b> The dimensions of the Force Traveller 4020 Super
 are 8,705 mm in length, 2,420 mm in width, and 3,340 mm in height.
 It has a wheelbase of 4,325 mm and a ground clearance of 195 mm.</p>

<p><b>Comfort Features:</b> The bus is equipped with comfortable seats,
 air conditioning, a music system, and ample legroom to provide a 
 comfortable travel experience for passengers.</p>

<p><b>Safety Features:</b> The vehicle comes with features like front and
 rear fog lamps, seat belts for all passengers, and an anti-lock 
 braking system (ABS) that enhance the safety of the passengers.</p></a>
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