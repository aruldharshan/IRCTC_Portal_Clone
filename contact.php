<?php
	session_start();
	if(isset($_SESSION['name'])){}
	else{
		header("location:login1.php");
		
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title> Contact </title>
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
			<h1 align="center">CONTACT US</h1>
	
			<div style="border-top: solid 1px;">
			<div style="width: 60%; float:left;">
			<br />
			<pre><h3>Customer Care Numbers :</h3>
	         0755-6610661, 0755-4090600 (Language: Hindi and English)..
			</pre>
			</div>
			
			<div style="width:40%; float:left; margin-top:17px;" >
			
			</div>
			</div>
			<br><br>
			
			<div style="width: 60%; float:left;">
			<pre><h3>For Railway tickets booked through IRCTC General Information</h3>
	
			I-tickets/e-tickets : care@irctc.co.in
            For Cancellation E-tickets : etickets@irctc.co.in
            For Mumbai Suburban Season tickets : seasontickets@irctc.co.in
			</pre>
			</div>
		
			<div style="width:30%; float:right; " >
			<img src="images/IRCTC.png" style="height:180px;"/>
			</div>
			
			
			<div style="width: 60%; float:left;">
			<pre><h3>ALL INDIA NUMBER(S): </h3>
	
			   139 Chargable Enquiry for PNR Status
               9962502536 GRP(Police) Tamil Nadu Region
               9846200100 GRP(Police) Kerala Region
               04425353999 RPF Tamil Nadu
               9003161710 RPF Tamil Nadu
               9995040000 RPF -Kerala
			</pre>
			</div>
		
			<div style="width:40%; float:left; " >
	
			</div>
			
			
			<div style="width: 60%; float:left;">
			<pre><h3>Registered Office / Corporate Office :</h3>
	        Indian Railway Catering and Tourism Corporation Ltd.,
              B-148, 11th Floor, Statesman House,
              Barakhamba Road, New Delhi 110001.
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