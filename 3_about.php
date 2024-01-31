<?php
session_start(); 
if(!$_SESSION['UserLogin']){ 
 
    header("Location:index.php"); 
    
    exit; 
} 
?>
<!DOCTYPE html>
<html>
<title>TeaRick Cafe</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

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
      <a href="index.html" class="w3-button w3-block w3-black">HOME</a>
    </div>
	<div class="w3-col s2">
      <a href="2_menu.html" class="w3-button w3-block w3-black">MENU</a>
    </div>
    <div class="w3-col s2">
      <a href="3_about.html" class="w3-button w3-block w3-black">ABOUT</a>
    </div>
    <div class="w3-col s2">
      <a href="4_where.html" class="w3-button w3-block w3-black">WHERE</a>
    </div>
	<div class="w3-col s2">
		<a href="index.html#login" class="w3-button w3-block w3-black"><?php echo $_SESSION['UserLogin'] ?>&nbsp;<img src="nouser.jpg" width="20%"></a>
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

<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large" style="margin-bottom: 3em;>

<!-- About Container -->
<div class="w3-container">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ABOUT THE CAFE</span></h5>
    <p>The Cafe was founded in Batasan Hills by Group 2 in Re:SAD in the year 2018. It was a small stall back then, but thanks to the rapid increase of Milktea popularity, our product gain a huge amount of boost in demand, which then helped the owners to establish the cafe.</p>
    <p>In addition to our full Milktea menu, we serve also light snacks that are good partner of it, as well as a cool and cozy ambiance that will make our customer feel comfortable and happy.</p>
	<p>And now, with the advancement of technology, we are ready to offer you a order and delivery service, which will be very helpful for you Milktea lovers especially in this time of prioritizing social distancing.</p>
    <div class="w3-panel w3-leftbar w3-light-grey">
      <p><i>"Use products from nature for what it's worth - but never too early, nor too late." Fresh is the new sweet.</i></p>
      <p>Chef, Coffeeist and Owner: Aira Alvarez</p>
    </div>
    <img src="TeaRickHouse.jpg" style="width:100%;max-width:1000px" class="w3-margin-top">
    <p><strong>Opening hours:</strong> everyday from 6am to 5pm.</p>
    <p><strong>Address:</strong> IBP Road, Batasan Hills, Quezon City</p>
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