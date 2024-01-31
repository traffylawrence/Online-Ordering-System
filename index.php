<?php
session_start();
if(isset($_SESSION['UserLogin'])){ 
    header("Location:2_menu.php"); 
    exit; 
}
include_once("connection.php");
$con=connection();
     
if(isset($_POST['login'])){
$user=$_POST['user'];
$pass=$_POST['pass'];
$sql = "SELECT * FROM usertbl WHERE user='$user' AND pass='$pass'";
$user=$con->query($sql)or die($con->error);
$row=$user->fetch_assoc();
$total=$user->num_rows;
if($total >0){
  $_SESSION['UserLogin']=$row['user'];
   $_SESSION['UserID']=$row['id'];
header("location:2_menu.php");
}
else{
   echo '<script> alert("Wrong Username/Password") </script>';
}
}

?>

<!DOCTYPE html>
<html>
<title>TeaRick Cafe</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>
body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
}

.bgimg {
  background-position: center;
  background-size: cover;
  background-image: url("/w3images/coffeehouse.jpg");
  min-height: 75%;
}

.menu {
  display: none;
}
</style>
<body>

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
	<div class="w3-col s2">
		<span style="font-size:30px;color:black;font-family:Aharoni;background-color:green;">TeaRik</span>
    </div>
    <div class="w3-col s2">
      <a href="index.php" class="w3-button w3-block w3-black">HOME</a>
    </div>
	<div class="w3-col s2">
      <a href="2_menu.php" class="w3-button w3-block w3-black">MENU</a>
    </div>
    <div class="w3-col s2">
      <a href="3_about.php" class="w3-button w3-block w3-black">ABOUT</a>
    </div>
    <div class="w3-col s2">
      <a href="4_where.php" class="w3-button w3-block w3-black">WHERE</a>
    </div>
	<div class="w3-col s2">
		<a href="index.php#login" class="w3-button w3-block w3-black">GUEST MODE&nbsp;<img src="nouser.jpg" width="20%"></a>
	</div>
 
  </div>
</div>

<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" style="background-image:url('CafeBG3.jpg');">
  <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
    <span class="w3-tag">Open from 6am to 5pm</span>
  </div>
  <div class="w3-display-middle w3-center">
    <span style="font-size:90px;text-shadow:5px 5px 10px lime;color:black;font-family:Aharoni;">TeaRik<sup>&reg;</sup></span>
  </div>
  <div class="w3-display-bottomright w3-center w3-padding-large w3-hide-small">
    <span class="w3-tag">IBP Road, Batasan Hills, Quezon City</span>
  </div>
</header>

<!-- Add a background color and large text to the whole page -->
<!-- Greeting Message -->
<div class="w3-large" style="margin-bottom: 5em;" id="login">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">WELCOME TO TEARIK CAFE! HOME OF THE AWESOMEST MILKTEA!</span></h5>
	<p>TeaRik is a Cafe that offers a variety of Milktea beverages and light snacks. Create your account now to experience our full delivery service and enjoy your Milktea wherever you want!</p>
  </div>

<!-- Sign In Form -->
	<div class="w3-container">
		<div class="w3-content" style="max-width:400px">
 
		<form action="" method="POST">
			<fieldset class="login">
				<h1 style="text-align:center;"><b>Sign In</b></h1><br><br>
				<span>Username: <input type="text" name="user" placeholder="Username" required></span><br><br>
				<span>Password: <input type="password" name="pass" placeholder="Password" required></span><br><br>
				<button type="submit" name="login" class="w3-button w3-black">FINISH</button><br><br><br>
				<span style="font-size:80%;"><b><i>Don't have an account? <a href="5_signup.php">Sign up</a> here</i></b></span><br>
				
				<span style="font-size:80%;"><b><i><a href="#">Forget Password? Click here</a></i></b></span>
			</fieldset>
		</form>
		</div>
	</div>

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-48 w3-large">
  <span>A Software Engineering Project powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></span>
</footer>

</body>
</html>
