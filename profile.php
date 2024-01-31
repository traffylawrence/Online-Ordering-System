 <?php
session_start(); 
if(!$_SESSION['UserLogin']){ 
    header("Location: index.php"); 
    exit; 
} 
include("connection.php");
$con=connection();
 $id=$_SESSION['UserLogin'];
$query=mysqli_query($con,"SELECT * FROM usertbl where user='$id'")or die(mysqli_error());
$row=mysqli_fetch_array($query);

//total 
$user_ID=$_SESSION['UserID'];
   $sum = $row['price'];
$sql = "SELECT SUM(price)AS sum FROM carttbl WHERE userid=$user_ID GROUP BY userid" ; 
$result = mysqli_query($con, $sql); 

while($rows =mysqli_fetch_assoc($result)){
$output="is="." ".$rows[$sum];
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
		<a href="index.php#login" class="w3-button w3-block w3-black"><?php echo $_SESSION['UserLogin'] ?>&nbsp;<img src="nouser.jpg" width="20%"></a>
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
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">Confirmation of order</span></h5>
	<p>Information Regarding the user <?php echo $_SESSION['UserLogin'] ?> and list of the product that you want to avail</p>
	
	<div class="w3-container">
		<div class="w3-content" style="max-width:500px">
		<form action="" method="POST">

			<fieldset class="signup">
				<h1 style="text-align:center;"><b>Confirm Transaction</b></h1><br><br>
				<table width="60%" align="center">
					<tr>
						<th>Name </th>
						<td><?php echo $row['name']; ?></td>
					</tr>
					
					<tr>
						<th>Number</th>
						<td><?php echo $row['num']; ?></td>
					</tr>
					<tr>
						<th>Address</th>
						<td><?php echo $row['address']; ?></td>
					</tr>
<tr>
						<th>Total</th>
					
						<td>
</td>
					</tr>

				</table><br><br>
				<span><button type="submit" name="changebtn" class="w3-button w3-black" style="text-align:center;">Change</button><br><br></span>
				<span style="font-size:80%;"><b><i>Dont want to Change Anything? <a href="index.php">Menu</a> here.</i></b></span>
				</fieldset>
		</form>
		</div>
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