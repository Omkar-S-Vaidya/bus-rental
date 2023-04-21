<?php
session_start();
include("connection.php");
include("function.php");
$user_data = check_login($conn);
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Home Page</title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>

<div class="navbar">
<a class="logo" href="#home"><?php echo$_SESSION['c_name']?> </a>
<a href="home.php">Home</a>
<a class="dp">
<select name="Bus" onchange="location=this.value">
<option  hidden>Vehicles</option>
<option value="tempo.php">Tempo</option>
<option value="minibus.php">Mini Bus</option>
<option value="bus.php">Bus</option>
<option value="van.php">Van</option>
</select>
</a>

<a href="#" class="active">About-Us</a>
<a href="#home">Contact</a>
<a href="#" class="logout slg">Hello! <?php $us=$user_data['u_fname']; echo ucfirst($us);?></a>
<a href="logout.php" class="slg">Log-out</a>
</div>
<main>
<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="https://www.simplytrip.in/images/Tempo-Traveller-Lineup.png" alt="Jane" style="width:100%;height:300px">
      <div class="container">
        <h2>Arjun & Yash </h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>jane@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
 </div>
  <div class="column">
    <div class="card">
      <img src="https://www.simplytrip.in/images/Tempo-Traveller-Lineup.png" style="width:100%;height:300px">
      <div class="container">
        <h2>Omkar</h2>
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>mike@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="https://www.simplytrip.in/images/Tempo-Traveller-Lineup.png" alt="John" style="width:100%;height:300px;">
      <div class="container">
        <h2>Yash & Arjun</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>john@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
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
