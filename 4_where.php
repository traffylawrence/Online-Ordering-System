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
<div class="w3-sand w3-grayscale w3-large">

<!-- Contact/Area Container -->
<div class="w3-container" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">WHERE TO FIND US</span></h5>
    <p>Find us at IBP Road, Batasan Hills, Quezon City</p>
    <img src="Maps.jpg" class="w3-image" style="width:100%">
    <p>We are open for suggestions and feedbacks about our products and service. We understand your needs and we will provide the right Milktea that will satisfy your thirts, and by giving us feedback, we will know what we have to improve more in our service. Please give us a message!</p>
    <form action="/action_page.php" target="_blank">
	  <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name"></p>
	  <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><textarea class="w3-input w3-padding-16 w3-border" placeholder="Message" required name="Message" rows="5"></textarea></p>
      <p><button class="w3-button w3-black" type="submit">SEND</button></p>
    </form>
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