<?php
session_start();
include("connection.php");
include("function.php");
$user_data = check_login($conn);
?>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$email=$_POST["email"];
	$feedback=$_POST["feedback"];
	$query="INSERT INTO `feedback`(`email`, `feedback`) VALUES ('$email','$feedback')";
	$result=mysqli_query($conn,$query);
	if($result){
		echo'thanks for your feedback';
	}

}
?>


<!DOCTYPE html>

<html>
<title>contact</title>
<head>
<link rel="stylesheet" href="css/home.css">
</head>
<body>
<div class="navbar">
<a class="logo" href="#home">O&M </a>
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

<a href="about.php">About-Us</a>
<a href="contact.php" class="active">Contact</a>
<a href="#" class="logout slg">Hello! <?php $us=$user_data['u_fname']; echo ucfirst($us);?></a>
<a href="logout.php" class="slg">Log-out</a>
</div>
<main>
<div class="contact">
  <form action="contact.php" method="post">
	<h1> Feedback</h1>

    <label for="lname">email</label>
    <input type="text" name="email" placeholder="Your email..">

    <label for="subject">Subject</label>
    <textarea  name="feedback" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
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