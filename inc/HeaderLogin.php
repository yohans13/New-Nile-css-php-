
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<! –– support for responsive page ––>
	
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">


	<title>New Nile Header</title>
	
	<link rel="stylesheet" type="text/css" href="css/header.css">

	<! –– Google FOnt Link ––>

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Mulish:wght@800&family=Russo+One&display=swap" rel="stylesheet">


	<! –– JavaScript JQuery libraries ––>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		
		<script>
		$(document).ready(function(){

		$('.mobileNav h3').click(function(){
		$('.mobileNav ul').toggle();
		
	});	
});

</script>

<style>
	


.uldiv   a {
  color: black;
  text-decoration: none;
  background-image: linear-gradient(#222b40, #222b40),
      linear-gradient(transparent,transparent),
    linear-gradient(#feb2b2, #feb2b2);
  background-size: 20px 2px, 100% 2px, 0 2px;
  background-position: calc(20px * -1) 100%, 100% 100%, 0 100%;
  background-repeat: no-repeat;
  transition: background-size 2s linear, background-position 2s linear;
}

.uldiv   a:hover {
  background-size: 20px 2px, 0 2px, 100% 2px;
  background-position: calc(100% + 20px) 100%, 100% 100%, 0 100%;
}

</style>


</head>
<body>

		<div class="navbar">

	<div class="topbar">
		<p class="topbarp">FREE DELIVERY (Sri Lanka Only) ON ORDERS OVER RS.5000</p>
	</div>


		<div class="logosec">
		<a href="index.php"><img src="img/icons/logo with text .png" alt="Logo"></a>
		</div>
		<!-- navigation bar -->

	<div class="uldiv">
		<div class="webbar">
		<ul>
			<li><a href="profile.php" class="navbutton">MY ACCOUNT</a></li>
			<li><a href="products.php" class="navbutton">PRODUCTS </a></li>
			<li><a href="Shop.php" class="navbutton">SHOP </a></li>
			<li><a href="contact.php" class="navbutton">SUPPORT </a></li>
		</ul>
		</div>


		<div class="mobileNav">
			<h3><img src="img/icons/menu.png">MENU</h3>
		<ul>
			<li><a href="index.php" class="navbutton">HOME</a></li>
			<li><a href="products.php" class="navbutton">PRODUCTS </a></li>
			<li><a href="shop.php" class="navbutton">SHOP </a></li>
			<li><a href="contact.php" class="navbutton">SUPPORT </a></li>
		</ul>
		</div>
	</div>

	<div class="icon">
		<a href="SignIn.php"><img src="img/icons/logout.png" ><img src="img/icons/logoutO.png" ></a>
		<a href="Msg.php" ><img src="img/icons/contactB.png" ><img src="img/icons/contactO.png" ></a>
		<a href="cart.php"><img src="img/icons/shopping-cartB.png" ><img src="img/icons/shopping-cartO.png" ></a>
		
		
	</div>
		<!-- /navigation bar/ -->

	</div>




</body>
</html>	