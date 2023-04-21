
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.stable{
position:relative;
left:30%;
  width: 600px;
  height: 600px;
  cursor:pointer;
}
.loader{
position:absolute;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 100%;
  height: 100%;
  animation: spin 2s linear infinite;
}
.loader1{
position:absolute;
top:300px;
left:200px;
}
@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
</head>
<body>

<div class="stable" onclick="home()">
<div class="loader" onclick="home()">
</div>
<div class="loader1" onclick="home()">
<script>
function home(){
	window.location.href = "home.php";
}

</script>

<p>thank you.... click here to go to home page</p>
</div>
</div>
</body>
</html>