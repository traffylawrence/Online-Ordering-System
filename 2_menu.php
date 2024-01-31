<?php
session_start(); 
if(!$_SESSION['UserLogin']){ 
    header("Location:index.php"); 
    exit; 
} else{
  //check session if there is logged in
echo 'Hello, user:'.$_SESSION['UserLogin']; 
}

#echo '<script> alert("Added to Cart") </script>';
include("connection.php");
$con=connection();
#ADD TASK Strawberry cream puff 22oz
if(isset($_POST['scp22'])){
$product="Strawberry Cream Puff 22oz";
$price="89";
$userid=$_SESSION['UserID'];
$sql="INSERT INTO `carttbl`(`product`, `price`,`userid`) VALUES ('$product','$price','$userid')";
 $con->query($sql)or die ($con->error);
echo '<script> alert("Product Added to Cart") </script>';
}
//add task strawberry creampuff 16oz
if(isset($_POST['scp16'])){
$product="Strawberry Cream Puff 16oz";
$price="69";
$userid=$_SESSION['UserID'];
$sql="INSERT INTO `carttbl`(`product`, `price`,`userid`) VALUES ('$product','$price','$userid')";
 $con->query($sql)or die ($con->error);
echo '<script> alert("Product Added to Cart") </script>';
}
#ADD TASK redvelvet 22oz
if(isset($_POST['rvd22'])){
$product="Red Velvet Deluxe 22oz";
$price="89";
$userid=$_SESSION['UserID'];
$sql="INSERT INTO `carttbl`(`product`, `price`,`userid`) VALUES ('$product','$price','$userid')";
 $con->query($sql)or die ($con->error);
echo '<script> alert("Product Added to Cart") </script>';
}
//add task redvelvet 16oz
if(isset($_POST['rvd16'])){
$product="Red Velvet Deluxe 16oz";
$price="69";
$userid=$_SESSION['UserID'];
$sql="INSERT INTO `carttbl`(`product`, `price`,`userid`) VALUES ('$product','$price','$userid')";
 $con->query($sql)or die ($con->error);
echo '<script> alert("Product Added to Cart") </script>';
}
#ADD TASK WinterMelon 22oz
if(isset($_POST['wm22'])){
$product="Wintermelon Deluxe 22oz";
$price="89";
$userid=$_SESSION['UserID'];
$sql="INSERT INTO `carttbl`(`product`, `price`,`userid`) VALUES ('$product','$price','$userid')";
 $con->query($sql)or die ($con->error);
echo '<script> alert("Product Added to Cart") </script>';
}
//add task wm 16oz
if(isset($_POST['wm16'])){
$product="Wintermelon Deluxe 16oz";
$price="69";
$userid=$_SESSION['UserID'];
$sql="INSERT INTO `carttbl`(`product`, `price`,`userid`) VALUES ('$product','$price','$userid')";
 $con->query($sql)or die ($con->error);
echo '<script> alert("Product Added to Cart") </script>';
}
#ADD TASK  drd 22oz
if(isset($_POST['drd22'])){
$product="Dark Chocolate Deluxe 22oz";
$price="89";
$userid=$_SESSION['UserID'];
$sql="INSERT INTO `carttbl`(`product`, `price`,`userid`) VALUES ('$product','$price','$userid')";
 $con->query($sql)or die ($con->error);
echo '<script> alert("Product Added to Cart") </script>';
}
//add task strawberry creampuff 16oz
if(isset($_POST['drd16'])){
$product="Dark Chocolate Deluxe 16oz";
$price="69";
$userid=$_SESSION['UserID'];
$sql="INSERT INTO `carttbl`(`product`, `price`,`userid`) VALUES ('$product','$price','$userid')";
 $con->query($sql)or die ($con->error);
echo '<script> alert("Product Added to Cart") </script>';
}
#ADD TASK cn puff 22oz
if(isset($_POST['cn22'])){
$product="Choco Nutella 22oz";
$price="89";
$userid=$_SESSION['UserID'];
$sql="INSERT INTO `carttbl`(`product`, `price`,`userid`) VALUES ('$product','$price','$userid')";
 $con->query($sql)or die ($con->error);
echo '<script> alert("Product Added to Cart") </script>';
}
//add task strawberry creampuff 16oz
if(isset($_POST['cn16'])){
$product="Choco Nutella 16oz";
$price="69";
$userid=$_SESSION['UserID'];
$sql="INSERT INTO `carttbl`(`product`, `price`,`userid`) VALUES ('$product','$price','$userid')";
 $con->query($sql)or die ($con->error);
echo '<script> alert("Product Added to Cart") </script>';
}
#ADD TASK Matcha Cream Cheese 22oz
if(isset($_POST['mcc22'])){
$product="Matcha Cream Cheese 22oz";
$price="89";
$userid=$_SESSION['UserID'];
$sql="INSERT INTO `carttbl`(`product`, `price`,`userid`) VALUES ('$product','$price','$userid')";
 $con->query($sql)or die ($con->error);
echo '<script> alert("Product Added to Cart") </script>';
}
//add task strawberry creampuff 16oz
if(isset($_POST['mcc16'])){
$product="Matcha Cream Cheese 16oz";
$price="69";
$userid=$_SESSION['UserID'];
$sql="INSERT INTO `carttbl`(`product`, `price`,`userid`) VALUES ('$product','$price','$userid')";
 $con->query($sql)or die ($con->error);
echo '<script> alert("Product Added to Cart") </script>';
}
#ADD TASK Tarocream puff 22oz
if(isset($_POST['tc22'])){
$product="Taro Cream 22oz";
$price="89";
$userid=$_SESSION['UserID'];
$sql="INSERT INTO `carttbl`(`product`, `price`,`userid`) VALUES ('$product','$price','$userid')";
 $con->query($sql)or die ($con->error);
echo '<script> alert("Product Added to Cart") </script>';
}
//add task strawberry creampuff 16oz
if(isset($_POST['tc16'])){
$product="Taro Cream 16oz";
$price="69";
$userid=$_SESSION['UserID'];
$sql="INSERT INTO `carttbl`(`product`, `price`,`userid`) VALUES ('$product','$price','$userid')";
 $con->query($sql)or die ($con->error);
echo '<script> alert("Product Added to Cart") </script>';
}
//Sandwich
if(isset($_POST['hs'])){
$product="Sandwich Haft Size";
$price="29";
$userid=$_SESSION['UserID'];
$sql="INSERT INTO `carttbl`(`product`, `price`,`userid`) VALUES ('$product','$price','$userid')";
 $con->query($sql)or die ($con->error);
echo '<script> alert("Product Added to Cart") </script>';
}
if(isset($_POST['fs'])){
$product="Sandwich Full Size";
$price="49";
$userid=$_SESSION['UserID'];
$sql="INSERT INTO `carttbl`(`product`, `price`,`userid`) VALUES ('$product','$price','$userid')";
 $con->query($sql)or die ($con->error);
echo '<script> alert("Product Added to Cart") </script>';
}
//Muffins
if(isset($_POST['3pc'])){
$product="Muffins ";
$price="34";
$userid=$_SESSION['UserID'];
$sql="INSERT INTO `carttbl`(`product`, `price`,`userid`) VALUES ('$product','$price','$userid')";
 $con->query($sql)or die ($con->error);
echo '<script> alert("Product Added to Cart") </script>';
}
if(isset($_POST['5pc'])){
$product="Muffins ";
$price="44";
$userid=$_SESSION['UserID'];
$sql="INSERT INTO `carttbl`(`product`, `price`,`userid`) VALUES ('$product','$price','$userid')";
 $con->query($sql)or die ($con->error);
echo '<script> alert("Product Added to Cart") </script>';
}
//Hotdog Waffle
if(isset($_POST['hw1'])){
$product="Hotdog Waffle 1pc";
$price="14";
$userid=$_SESSION['UserID'];
$sql="INSERT INTO `carttbl`(`product`, `price`,`userid`) VALUES ('$product','$price','$userid')";
 $con->query($sql)or die ($con->error);
echo '<script> alert("Product Added to Cart") </script>';
}
if(isset($_POST['hw2'])){
$product="Hotdog Waffle 2pcs";
$price="24";
$userid=$_SESSION['UserID'];
$sql="INSERT INTO `carttbl`(`product`, `price`,`userid`) VALUES ('$product','$price','$userid')";
 $con->query($sql)or die ($con->error);
echo '<script> alert("Product Added to Cart") </script>';
}
//Pancakes
if(isset($_POST['pcm'])){
$product="Pancakes (Medium)";
$price="14";
$userid=$_SESSION['UserID'];
$sql="INSERT INTO `carttbl`(`product`, `price`,`userid`) VALUES ('$product','$price','$userid')";
 $con->query($sql)or die ($con->error);
echo '<script> alert("Product Added to Cart") </script>';
}
if(isset($_POST['pcl'])){
$product="Pancake (Large)";
$price="24";
$userid=$_SESSION['UserID'];
$sql="INSERT INTO `carttbl`(`product`, `price`,`userid`) VALUES ('$product','$price','$userid')";
 $con->query($sql)or die ($con->error);
echo '<script> alert("Product Added to Cart") </script>';
}
//Takoyaki
if(isset($_POST['t1'])){
$product="Takoyaki";
$price="49";
$userid=$_SESSION['UserID'];
$sql="INSERT INTO `carttbl`(`product`, `price`,`userid`) VALUES ('$product','$price','$userid')";
 $con->query($sql)or die ($con->error);
echo '<script> alert("Product Added to Cart") </script>';
if(isset($_POST['t2'])){
$product="Takoyaki (with Octopus)";
$price="99";
$userid=$_SESSION['UserID'];
$sql="INSERT INTO `carttbl`(`product`, `price`,`userid`) VALUES ('$product','$price','$userid')";
 $con->query($sql)or die ($con->error);
echo '<script> alert("Product Added to Cart") </script>';
}
//Fries
if(isset($_POST['fss'])){
$product = $_POST['friestype']; 
$price="24";
$userid=$_SESSION['UserID'];
$sql="INSERT INTO `carttbl`(`product`, `price`,`userid`) VALUES ('$product','$price','$userid')";
 $con->query($sql)or die ($con->error);
echo '<script> alert("Product Added to Cart") </script>';
}
if(isset($_POST['fm'])){
$product=$_POST['friestype'];
$price="44";
$userid=$_SESSION['UserID'];
$sql="INSERT INTO `carttbl`(`product`, `price`,`userid`) VALUES ('$product','$price','$userid')";
 $con->query($sql)or die ($con->error);
echo '<script> alert("Product Added to Cart") </script>';
}
if(isset($_POST['fl'])){
$product=$_POST['friestype'];
$price="64";
$userid=$_SESSION['UserID'];
$sql="INSERT INTO `carttbl`(`product`, `price`,`userid`) VALUES ('$product','$price','$userid')";
 $con->query($sql)or die ($con->error);
echo '<script> alert("Product Added to Cart") </script>';
}
}
?>
<!DOCTYPE html>
<html>
<title>TeaRick Cafe</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

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
<div class="w3-large">

<!-- Menu Container -->
<div class="w3-container">
 <form action="#" method="post">
  <div class="w3-content" style="max-width:700px">
 
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">THE MENU</span></h5>
	
	<p>Please put a check on the ones you want to order.</p>
  
    <div class="w3-row w3-center w3-card w3-padding">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Drinks');" id="myLink">
        <div class="w3-col s6 tablink">Milkteas</div>
      </a>
	  <a href="javascript:void(0)" onclick="openMenu(event, 'Eat');">
        <div class="w3-col s6 tablink">Snacks</div>
      </a>
    </div>

    <div id="Drinks" class="w3-container menu w3-padding-48 w3-card" style="margin-bottom:3em;">
      <table width="100%" class="tblmenu">
	  <tr>
		<th><a href="mt04.jpg" target="_blank"><img src="mt04.jpg" width="50%"></a></th>
		<td><h5>Strawberry Cream Puff</h5>
		<p class="w3-text-grey" name="scp">Strawberry Milktea with Cream.</p>
		<button name="scp22">22oz: Php89.00</button>
		<button name="scp16">16oz: Php69.00</button></td>
	  </tr>
	  <tr>
	    <th><a href="mt05.jpg" target="_blank"><img src="mt05.jpg" width="50%"></a></th>
		<td><h5>Red Velvet Deluxe</h5>
		<p class="w3-text-grey">Extra Chocolatey Milktea.</p>
		<button name="rvd22">22oz: Php89.00</button>
		<button name="rvd16">16oz: Php69.00</button></td>
	  </tr>
      
	  <tr>
		<th><a href="mt06.jpg" target="_blank"><img src="mt06.jpg" width="50%"></a></th>
        <td><h5>Wintermelon Deluxe</h5>
        <p class="w3-text-grey">A Chilly Milktea that is good for winter.</p>
	<button name="wm22">22oz: Php89.00</button>
		<button name="wm16">16oz: Php69.00</button></td>
	  </tr>
	
	  <tr>
		<th><a href="mt07.jpg" target="_blank"><img src="mt07.jpg" width="50%"></a></th>
		<td><h5>Dark Chocolate Deluxe</h5>
		<p class="w3-text-grey">Milktea with Dark Chocolate Mix.</p>
		<button name="drd22">22oz: Php89.00</button>
		<button name="drd16">16oz: Php69.00</button></td>
    
	  <tr>
		<th><a href="mt08.jpg" target="_blank"><img src="mt08.jpg" width="50%"></a></th>
		<td><h5>Choco Nutella</h5>
		<p class="w3-text-grey">Milktea with Nutella Chocolate.</p>
		<button name="cn22">22oz: Php89.00</button>
		<button name="cn16">16oz: Php69.00</button></td>
	</tr>
	  
	  <tr>
	    <th><a href="mt09.jpg" target="_blank"><img src="mt09.jpg" width="50%"></a></th>
		<td><h5>Matcha Cream Cheese</h5>
		<p class="w3-text-grey">Creamy and Cheesy Milktea.</p>
		<button name="mcc22">22oz: Php89.00</button>
		<button name="mcc16">16oz: Php69.00</button></td>
	
	  </tr>
	  
	  <tr>
		<th><a href="mt10.jpg" target="_blank"><img src="mt10.jpg" width="50%"></a></th>
		<td><h5>Taro Cream</h5>
		<p class="w3-text-grey">I have no idea what Taro is.</p>
		<button name="tc22">22oz: Php89.00</button>
		<button name="tc16">16oz: Php69.00</button></td>
	  </tr>
	</table>
    </div>

	
	<div id="Eat" class="w3-container menu w3-padding-48 w3-card" style="margin-bottom:3em;">
	  <table width="100%" class="tblmenu">
      <tr>
		<th><a href="fd02.jpg" target="_blank"><img src="fd02.jpg" width="100%"></a></th>
		<td><h5>Sandwich</h5>
		<p class="w3-text-grey">A varaity of different sandwiches made by our best baker.</p>
		<button name="hf">Haft Sandwich: Php29.00</button>
		<button name="sf">Full Sandwich: Php49.00</button></td>
      </tr>
	  
	  <tr>
		<th><a href="fd07.jpg" target="_blank"><img src="fd07.jpg" width="100%"></a></th>
		<td><h5>Muffins</h5>
		<p class="w3-text-grey">Tasty and squeshy muffins with variety of flavors.</p>
		<button name="3pc">3pcs: Php34.00</button>
		<button name="5pc">5pcs: Php44.00</button></td>
      </tr>
	  
	  <tr>
		<th><a href="fd08.jpg" target="_blank"><img src="fd08.jpg" width="290" height="215"></a></th>
		<td><h5>Hotdog Waffle</h5>
		<p class="w3-text-grey">Hotdog enclosed with two yummy waffle bread.</p>
	<button name="hw1">1pc: Php14.00</button>
		<button name="hw2">2pcs: Php24.00</button></td>
		</td>
	  </tr>
	
	  <tr>
		<th><a href="fd09.jpg" target="_blank"><img src="fd09.jpg" width="100%"></a></th>
		<td><h5>Pancakes</h5>
		<p class="w3-text-grey">With syrup, butter and lots of berries.</p>
		<button name="pcm">Medium: Php24.00</button>
		<button name="pcl">Large: Php39.00</button></td>
	  </tr>
	  
	  <tr>
		<th><a href="fd01.jpg" target="_blank"><img src="fd01.jpg" width="50%"></a><br>
		<a href="fd03.jpg" target="_blank"><img src="fd03.jpg" width="50%"></a></th>
		<td><h5>Takoyaki</h5>
		<p class="w3-text-grey">A steamy ball of vegetable goodies.</p>
		<button name="t1">5 pcs Serving: Php49.00</button>
		<button name="t2">With Octopus: Php99.00</button></td>
	  </tr>
	  
	  
	  <tr>
		<th><a href="fd04.jpg" target="_blank"><img src="fd04.jpg" width="30%"></a>
		<a href="fd05.jpg" target="_blank"><img src="fd05.jpg" width="30%"></a>
		<a href="fd06.jpg" target="_blank"><img src="fd06.jpg" width="30%"></a></th>
		<td><h5>Fries</h5>
		<p class="w3-text-grey">Fries with different style of cooking.</p>
<select id="type" name="friestype">
    <option value="Crinkle">Crinkle</option>
    <option value="Criss Cut">Criss Cut</option>
    <option value="Curly">Curly</option>
</select><br>
    <button name="frs">Small: Php24.00</button>
		<button name="fm">Medium: Php44.00</button>
		<button name="fl">Large: Php64.00</button>

	</td>
	  </tr>
	  <!--
	  <tr>
		<th><a href="fd.jpg" target="_blank"><img src="fd.jpg" width="100%"></a></th>
		<h5>Curly Fries<input type="checkbox" name="CF" class="cb"></h5>
		<p class="w3-text-grey">Fries that are softer and tastier</p><br>
	  </tr>
	  
	  <tr>
		<th><a href="fd.jpg" target="_blank"><img src="fd.jpg" width="100%"></a></th>
		<h5>Criss Cut Fries<input type="checkbox" name="CCT" class="cb"></h5>
		<p class="w3-text-grey">Fries that looks like a potato chip</p><br>
	  </tr>
	  -->
	</table>
 </form>
    </div>
	<div style="text-align:center; margin:3em 0;">
		<button class="w3-button w3-black" name="process"><a href="cart.php">VIEW CART</a></button><br><br>
		<span style="color:red;font-size:80%;"><b><i>NOTICE: You are in Guest mode. If you want to process your order, <a class="w3-black" href="index.php#login">sign in</a> first or <a class="w3-black" href="5_signup.html">sign up</a> here.</i></b></span>
	</div>
  </div>
 
</div>

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-48 w3-large">
  <span>A Software Engineering Project powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></span>
</footer>

<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
</script>

</body>
</html>