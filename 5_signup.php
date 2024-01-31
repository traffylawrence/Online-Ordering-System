<?php
session_start();
if(isset($_SESSION['UserLogin'])){ 
    header("Location:2_menu.php"); 
    exit; 
}
include("connection.php");
$con=connection();
        if (isset($_POST['signup'])) {
 $name=$_POST['name'];
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $email=$_POST['email'];
    $num=$_POST['num'];
    $address=$_POST['address'];
    $sql_e = "SELECT * FROM usertbl WHERE email='$email'";
    $sql_u = "SELECT * FROM usertbl WHERE user='$user'";
    $sql_n = "SELECT * FROM usertbl WHERE num='$num'";
    $res_e = mysqli_query($con, $sql_e);
    $res_u = mysqli_query($con, $sql_u);
    $res_n = mysqli_query($con, $sql_n);

    if (mysqli_num_rows($res_e) > 0) {
      echo '<script> alert("Email Already Taken") </script>';  
    }else if(mysqli_num_rows($res_u) > 0){
      echo '<script> alert("Username Already Taken") </script>';
      }else if(mysqli_num_rows($res_n) > 0){
     echo '<script> alert("Number Already Taken") </script>';
    }else{
        $sql= "INSERT INTO `usertbl`(`name`, `user`, `pass`, `email`, `num`, `address`) VALUES ('$name','$user','$pass','$email','$num','$address')";
          $con->query($sql)or die ($con->error);
   echo '<script> alert("Account Created") </script>';
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

<!-- Sign Up Form -->
<div class="w3-large" style="margin-bottom: 5em;">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">SIGN UP</span></h5>
	<p>Create an Account by signing up below. Doing so will grant you the privilege to avail our delivery service for your Milktea cravings and needs.</p>
	
	<div class="w3-container">
		<div class="w3-content" style="max-width:500px">
		<form action="" method="POST">

			<fieldset class="signup">
				<h1 style="text-align:center;"><b>Sign Up</b></h1><br><br>
				<table width="60%" align="center">
					<tr>
						<th>Name</th>
						<td><input type="text" name="name" placeholder="Full Name" size="30" required></td>
					</tr>
					<tr>
						<th>Username</th>
						<td><input type="text" name="user" placeholder="Username" size="30" required></td>
					</tr>
					<tr>
						<th>Password</th>
						<td><input type="password" name="pass" placeholder="Password" size="30" required></td>
					</tr>
					<tr>
						<th>Email</th>
						<td><input type="email" name="email" placeholder="Email" size="30" required>
					</tr>
					<tr>
						<th>Number</th>
						<td><input type="text" name="num" placeholder="Contact Number" size="30" required>
					</tr>
					<tr>
						<th>Address</th>
						<td><input type="address" name="address" placeholder="Address" size="30" required>
					</tr>
				</table><br><br>
				<span><button type="submit" name="signup" class="w3-button w3-black" style="text-align:center;">FINISH</button><br><br></span>
				<span style="font-size:80%;"><b><i>Already have an account? <a href="index.php">Sign In</a> here.</i></b></span>
				</fieldset>
		</form>
		</div>
	</div>
  </div>


<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-48 w3-large">
  <span>A  Software Engineering Project powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></span>
</footer>

</body>
</html>