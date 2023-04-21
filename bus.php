<?php
session_start();
include("connection.php");
include("function.php");
$user_data = check_login($conn);
$_SESSION['bus1']="https://res.cloudinary.com/dtptf8xuw/image/fetch/c_scale,q_30,w_350,f_auto/l_text:Arial_20_bold:TrucksBuses.com,x_70,y_100,co_rgb:ffffff/https://www.trucksbuses.com/uploads/strong(1)(2).png";
$_SESSION['bus2']="https://5.imimg.com/data5/ZX/LN/PH/GLADMIN-3061/tata-lpo-10-2-starbus-ultra-staff-bus-optional-ac.jpg";
$_SESSION['bus1.1']="https://cdni.autocarindia.com/utils/imageresizer.ashx?n=http://img.haymarketsac.in/autocarpro/7218b003-6508-4cee-89c2-550fa68715dd.JPG&w=750&h=490&q=75&c=1";
$_SESSION['bus1.2']="https://farm1.static.flickr.com/792/40578415474_a59ec52d46.jpg";
$_SESSION['bus2.1']="https://keralacars.in/wp-content/uploads/2020/10/49-seat-inner.jpg";
$_SESSION['bus2.2']="https://1.bp.blogspot.com/-SvzxxGMybQA/X0H8cLpkIEI/AAAAAAAAB8w/KjzK7VHPLvcRQefi3TOie7f3abr7eA71ACLcBGAsYHQ/s2048/7.JPG";


?>
<html>
<title>BUS</title>
<head>
<link rel="stylesheet" href="css/home.css">
</head>
<body>
<div class="navbar">
<a class="subname" href="home.php"><?php echo$_SESSION['c_name']?> -Bus</a>
</div>
<main>
<div class="tempo">
	<h1>Bus Travellers</h1>
<hr>
<div class="tempo-frame">
<div class="section">
<img class="myslide1 fade" src="<?php echo $_SESSION['bus1']?>">
<img class="myslide1 fade" src="<?php echo $_SESSION['bus1.1']?>">
<img class="myslide1 fade" src="<?php echo $_SESSION['bus1.2']?>">
<button class="l1" onclick="plus1(-1)"><</button>
<button class="r1" onclick="plus1(1)">></button>
<form action="bus.php" method="post">
<a href="1-bus.php">
<h3><?php $_SESSION['brand']="Ashok Leyland Lynx Strong";echo $_SESSION['brand'];?></h3>
<hr>
<p><b>Seating Capacity:</b>The Ashok Leyland Lynx Strong has a
 seating capacity of up to 47 passengers, including the driver.</p>

<p><b>Engine:</b> It is powered by a 5.7-litre H Series CRS 
diesel engine that delivers a maximum power output of 180 bhp and a peak torque of 660 Nm.</p>

<p><b>Dimensions:</b> The dimensions of the Ashok Leyland Lynx Strong are 12,000 mm in 
length, 2,550 mm in width, and 3,815 mm in height. It has a wheelbase of 
6,150 mm and a ground clearance of 245 mm.</p>

<p><b>Comfort Features:</b> The bus is equipped with comfortable seats,
 air conditioning, a music system, and ample legroom to provide a 
 comfortable travel experience for passengers.</p>

<p><b>Safety Features:</b> The vehicle comes with features like front and
 rear fog lamps, seat belts for all passengers, and an anti-lock 
 braking system (ABS) that enhance the safety of the passengers.</p></a>
</div>
<form>


<div class="section">
<img class="myslide2 fade" src="<?php echo $_SESSION['bus2']?>">
<img class="myslide2 fade" src="<?php echo $_SESSION['bus2.1']?>">
<img class="myslide2 fade" src="<?php echo $_SESSION['bus2.2']?>">
<button class="l1" onclick="plus2(-1)"><</button>
<button class="r1" onclick="plus2(1)">></button>

<a href="2-bus.php">
<h3><?php $_SESSION['brand1']="Tata LPO 10.2";echo $_SESSION['brand1'];?></h3>
<hr>
<p><b>Seating Capacity:</b> The Tata LPO 10.2 has a seating 
capacity of up to 56 passengers, including the driver.</p>

<p><b>Engine:</b> It is powered by a 3.2-litre diesel engine 
that delivers a maximum power output of 99 bhp and a peak torque of 300 Nm.</p>

<p><b>Dimensions:</b> The dimensions of the Tata LPO 10.2 are 10,710 mm in length, 2,550 mm in width, and 3,130 mm in height. It has a wheelbase of 5,240 mm and a ground clearance of 230 mm.</p>

<p><b>Comfort Features:</b>  The bus is equipped with comfortable seats, 
air conditioning, a music system, and ample legroom to provide
 a comfortable travel experience for passengers.</p>

<p><b>Safety Features:</b> The vehicle comes with features like front
 and rear fog lamps, seat belts for all passengers, and an anti-lock
 braking system (ABS) that enhance the safety of the passengers.</p> </a>                       
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