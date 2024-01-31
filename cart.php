<?php
session_start(); 
if(!$_SESSION['UserLogin']){ 
    header("Location:index.php"); 
    exit; 
} 
include("connection.php");
$con=connection();
//Delete product
if(isset($_GET['del'])){
   $ID=$_GET['del'];
 mysqli_query($con, "DELETE FROM carttbl WHERE prodid=$ID");
header('location:cart.php');

}
//viewtask
$user_ID=$_SESSION['UserID'];
 $sql = "SELECT * FROM carttbl INNER JOIN usertbl ON carttbl.userid = usertbl.id WHERE userid=$user_ID";  
 $result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($result);
?>


<!DOCTYPE html>
<html>
<title>TeaRick Cafe</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
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
		<a href="index.php#login" class="w3-button w3-block w3-black"><?php echo $_SESSION['UserLogin'] ?>&nbsp<img src="nouser.jpg" width="20%"></a>
	</div>
   <div class="w3-col s2">
      <a href="logout.php" class="w3-button w3-block w3-black">LOG-OUT</a>
    </div>
    <div class="w3-col s2">
      <a href="cart.php" class="w3-button w3-block w3-black"><i class="fas fa-shopping-cart"> Cart</i></a>
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
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">Thank you for purchasing.</span></h5>
	<p>Shopping cart of user <?php echo $_SESSION['UserLogin'] ?> Thank you for buying and we hope to make a transaction with you again</p>
	
	<div class="w3-container">
		<div class="w3-content" style="max-width:500px">
		<form action="" method="POST">

			<fieldset class="signup">
				<h1 style="text-align:center;"><b>Cart</b></h1><br><br>
				<table width="80%" align="center" >
            <tr>
          <tr>
            <th><b>No.</b></th>
            <th><b>Product</b></th>
            <th><b>Price </b></th>
            <th><b>Delete</b></th>
          </tr>
         <?php $prodid = 1;
  if(mysqli_num_rows($result) > 0)  
  {  
    ?>
      <?php  $i=1;  while($row = mysqli_fetch_array($result))  
       {  
  ?>    

<tr>
  <td><?php echo "$prodid"; ?></td>  
            <td><?php echo $row["product"]; ?></td>
            <td><?php echo $row["price"]; ?></td>
             <td class="center"><a href="cart.php?del=<?php echo $row['prodid']; ?>"><i class="fas fa-trash-alt"></i></a>
      
      </td>
   <?php  
       $prodid++;}  
 } 
   
  ?> 
          </tr>
					
				</table><br><br>
				<span><button type="submit" name="signup" class="w3-button w3-black" style="text-align:center;">FINISH</button><br><br></span>
				<span style="font-size:80%;"><b><i>Want some more?. <a href="2_menu.php">Order</a> here.</i></b></span>
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