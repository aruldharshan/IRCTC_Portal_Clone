<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> Accomodation </title>
	<link rel="shortcut icon" href="images/favicon.png"></link>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	</link>
	<link href="css/Default.css" rel="stylesheet">
	</link>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script>
		$(document).ready(function()
		{
			//alert($(window).width());
			var x=(($(window).width())-1024)/2;
			//alert(x);
			$('.wrap').css("left",x+"px");
		});

	</script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/man.js"></script>
	
	
</head>
<body>
	<div class="wrap">
		<!-- Header -->
		<div class="header">
			<div style="float:left;width:150px;">
				<img src="images/logo.png"/>
			</div>		
			<div>
			<div style="float:right; font-size:20px;margin-top:20px;">
			<?php
			 if(isset($_SESSION['name']))
			 {
			 echo "Welcome,".$_SESSION['name']."&nbsp;&nbsp;&nbsp;<a href=\"logout.php\" class=\"btn btn-info\">Logout</a>";
			 }
			 ?>
			
			
			</div>
			<div id="heading">
				<a href="index.php">Indian Railways</a>
			</div>
			</div>
		</div>
		<!-- Navigation bar -->
		<div class="navbar navbar-inverse" >
			<div class="navbar-inner">
				<div class="container" >
				<a class="brand" href="index.php" >HOME</a>
				<a class="brand" href="train.php" >FIND TRAIN</a>
				<a class="brand" href="reservation.php">RESERVATION</a>
				<a class="brand" href="profile.php">PROFILE</a>
				<a class="brand" href="contact.php">CONTACT</a>
				<a class="brand" href="about.php">ABOUT US</a>
				<a class="brand" href="emergency_booking.php">EMERGENCY BOOKING</a>
				</div>
			</div>
		</div>
		
		<div>
			<h2>  </h2>
			<div>
				
			</div>
		</div>
		
		<div class="span12 well">
			<h1 align="center">ACCOMMODATION PROVIDING SITES</h1>
	
			<div style="border-top: solid 1px;">
			<div style="width: 60%; float:left;">
			<br />
			<pre><h3>AIRBNB.COM:</h3>
	        Whether you’re looking for a treehouse for the weekend or an entire home for the whole family, a warm welcome awaits. Behind every stay is a real person who can give you the details you need to check in and feel at home.
		<a href="https://www.airbnb.co.in/" target="_blank"><img src="images/airbnb1.png"> Click to reach airbnb.com</a>
			</pre>
			</div>
			
			<div style="width:40%; float:left; margin-top:17px;" >
			
			</div>
			</div>
		
			<div style="width:30%; float:right; " >
			<img src="images/tt2.png" style="height:290px;"/>
			</div>
			
			
			<div style="width: 60%; float:left;">
			<pre><h3>TRIP ADVISOR.COM: </h3>
			Tripadvisor, the world's largest travel platform*, helps 463 million travelers each month** make every trip their best trip. Travelers across the globe use the Tripadvisor site and app to browse more than 859 million reviews and opinions of 8.6 million accommodations, restaurants, experiences, airlines and cruises.
			<a href="https://www.tripadvisor.in/" target="_blank"><img src="images/trp.png"> Click to reach trip-advisor.com</a>
			</pre>
			</div>
		
			<div style="width:40%; float:left; " >
	
			</div>
			
			
			<div style="width: 60%; float:left;">
			<pre><h3>YATRA.COM</h3>
	        It is one of India's leading online travel companies and operates the website Yatra.com. The company provides information, pricing, availability, and booking facility for domestic and international air travel, domestic and international hotel bookings, holiday packages, buses, trains, in city activities, inter-city and point-to-point cabs, homestays and cruises.
			  <a href="https://www.yatra.com" target="_blank"><img src="images/yatra_logo.png"> Click to reach yatra.com</a>
			</pre>
			</div>
		
			<div style="width:40%; float:left; " >
			
			</div>

		</div>
		
		
		<!-- Footer -->
		<footer >
		<div style="width:100%;">
			<div style="float:left;">
			<p class="text-right text-info">  &copy; 2020 Copyright PVT Ltd.</p>	
			</div>
			<div style="float:right;">
			<p class="text-right text-info">	Desinged By : Team Blue</p>
			</div>
		</div>
		</footer>
	</div>
</body>
</html>