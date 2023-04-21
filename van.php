<?php
session_start();
include("connection.php");
include("function.php");
$user_data = check_login($conn);
$_SESSION['van1']="https://images.hgmsites.net/lrg/2018-toyota-sienna-xle-awd-7-passenger-natl-angular-front-exterior-view_100660849_l.jpg";
$_SESSION['van2']="https://images.hgmsites.net/lrg/2008-dodge-grand-caravan-4-door-wagon-sxt-angular-front-exterior-view_100298154_l.jpg";
$_SESSION['van3']="https://ic1.maxabout.us/autos/cars_india//F/2015/3/force-trax-gama-p.jpg/thumb/350";
$_SESSION['van1.1']="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRP5ZTmJgFyIpc2Cxinn2z1Ljzfh52X4g9-8g&usqp=CAU";
$_SESSION['van1.2']="https://www.iihs.org/cdn-cgi/image/width=636/api/ratings/model-year-images/3225/";
$_SESSION['van2.1']="https://www.allpar.com/attachments/cargo-van-jpg.48061/";
$_SESSION['van2.2']="https://blog.prescottmendota.com/wp-content/uploads/2019/09/2019-dodge-grand-caravan-mendota-il-945x328.jpg";
$_SESSION['van3.1']="https://gaadiwaadi.com/wp-content/uploads/2020/09/Force-Trax-Cruiser-and-Toofan-interior-rear-seats-1046x720.jpg";
$_SESSION['van3.2']="https://www.team-bhp.com/forum/iipcache/60947.jpg";
?>
<html>
<title>TEMOP</title>
<head>
<link rel="stylesheet" href="css/home.css">
</head>
<body>
<div class="navbar">
<a class="subname" href="home.php"><?php echo$_SESSION['c_name']?> -van</a>
</div>
<main>
<div class="tempo">
	<h1>van Travellers</h1>
<hr>
<div class="tempo-frame">
<div class="section">
<img class="myslide1 fade" src="<?php echo $_SESSION['van1']?>">
<img class="myslide1 fade" src="<?php echo $_SESSION['van1.1']?>">
<img class="myslide1 fade" src="<?php echo $_SESSION['van1.2']?>">
<button class="l1" onclick="plus1(-1)"><</button>
<button class="r1" onclick="plus1(1)">></button>
<a href="1-van.php">
<h3><?php $_SESSION['brand']="Toyota Sienna";echo $_SESSION['brand'];?></h3>
<hr>
<p><b>Seating Capacity:</b>  The Toyota Sienna has a seating capacity of up to 8
 passengers, including the driver</p>

<p><b>Engine:</b>  It is powered by a 3.5-litre V6 engine that delivers a maximum 
power output of 296 horsepower and a peak torque of 263 lb-ft..</p>

<p><b>Dimensions:</b>  The dimensions of the Toyota Sienna are 5,190 mm in 
length, 1,990 mm in width, and 1,750 mm in height. It has a wheelbase of 
3,080 mm and a ground clearance of 165 mm.</p>

<p><b>Comfort Features:</b>The minivan is equipped with comfortable seats, 
air conditioning, a music system, and ample legroom to provide a comfortable
 travel experience for passengers. It also features a spacious cargo area for
 luggage and other items.</p>

<p><b>Safety Features:</b> The vehicle comes with features like a backup
 camera, blind spot monitor, rear cross-traffic alert, and a suite of 
 driver-assist features such as adaptive cruise control, lane departure
 warning, and automatic high beams, that enhance the safety of the passengers.</p></a>
</div>


<div class="section">
<img class="myslide2 fade" src="<?php echo $_SESSION['van2']?>">
<img class="myslide2 fade" src="<?php echo $_SESSION['van2.1']?>">
<img class="myslide2 fade" src="<?php echo $_SESSION['van2.2']?>">
<button class="l1" onclick="plus2(-1)"><</button>
<button class="r1" onclick="plus2(1)">></button>

<a href="2-van.php">
<h3><?php $_SESSION['brand1']="Dodge Grand Caravan ";echo $_SESSION['brand1'];?></h3>
<hr>
<p><b>Seating Capacity:</b>The Dodge Grand Caravan has a seating capacity of 
up to 7 passengers, including the driver.</p>

<p><b>Engine:</b>  It is powered by a 3.6-litre V6 engine that delivers a 
maximum power output of 283 horsepower and a peak torque of 260 lb-ft.</p>

<p><b>Dimensions:</b> The dimensions of the Dodge Grand Caravan are 5,151 
mm in length, 1,998 mm in width, and 1,750 mm in height. It has a wheelbase 
of 3,078 mm and a ground clearance of 142 mm.</p>

<p><b>Comfort Features:</b>The minivan is equipped with comfortable seats,
 air conditioning, a music system, and ample legroom to provide a comfortable
 travel experience for passengers. It also features a spacious cargo area for
 luggage and other items </p>

<p><b>Safety Features:</b> The vehicle comes with features like a backup camera
, blind spot monitoring, and rear cross-path detection, that enhance the safety 
of the passengers.</p> </a>                       
</div>


<div class="section">
<img class="myslide3 fade" src="<?php echo $_SESSION['van3']?>">
<img class="myslide3 fade" src="<?php echo $_SESSION['van3.1']?>">
<img class="myslide3 fade" src="<?php echo $_SESSION['van3.2']?>">
<button class="l1" onclick="plus3(-1)"><</button>
<button class="r1" onclick="plus3(1)">></button>

<a href="3-van.php">
<h3><?php $_SESSION['brand2']="Force Trax Gama";echo $_SESSION['brand2'];?></h3>
<hr>
<p><b>Seating Capacity:</b>  The Force Trax Gama has a seating capacity of
 up to 4 passengers, including the driver</p>

<p><b>Engine:</b>  It is powered by a 2.6-litre diesel engine that delivers
 a maximum power output of 60 horsepower and a peak torque of 158 Nm.</p>
 
<p><b>Dimensions:</b>The dimensions of the Force Trax Gama are 4,930 mm in
 length, 1,670 mm in width, and 1,920 mm in height. It has a wheelbase of 
 3,050 mm and a ground clearance of 210 mm.</p>

<p><b>Comfort Features:</b> The vehicle is equipped with comfortable seats,
 air conditioning, and a music system to provide a comfortable travel experience for passengers.</p>

<p><b>Safety Features:</b>The vehicle comes with features like seat belts and a 
sturdy body frame that enhance the safety of the passengers.</p></a>
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