<?php
include("connection.php");

	
$query="SELECT * FROM booking WHERE 1";
$result=mysqli_query($conn,$query);
	if(mysqli_num_rows($result)>0){
		$n=1;
		while($row=mysqli_fetch_assoc($result)){
			print($row['p_id']." ".$row['vehicel']." ".$row['sdate']." ".$row['edate']."<br>");
			
			
		}
	}
	else{
		echo"error";
	}
$Edate=date("Y-m-d");
if($_SERVER['REQUEST_METHOD']=='POST'){
	$query="DELETE FROM `booking` WHERE edate<='$Edate'";
	$result=mysqli_query($conn,$query);

}
echo"<html>
<body>
<form method='post' action='demo.php'>
<button type='submit'>check</button>
</form>
</body>
</html>";
?>