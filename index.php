<?php
session_start();
 
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Rent Wheels</title>
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> 
		<script defer src="js/Rentwheels1.js"></script>
		<script src="js/modernizr.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>
		<script defer src="js/jquery.flexslider.js"></script>
	  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <link rel="stylesheet" href="css/pay_style.css">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script src="datePicker.js"></script>
    <link rel="stylesheet" href="runnable.css" />
			
      <script>
	  $( document ).ready(function() {
			showLocation();
		});
		function showLocation() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
			
            if (this.readyState == 4 && this.status == 200) 
			{
                document.getElementById("car-location").innerHTML = this.responseText;
            }
        };
         xmlhttp.open("GET", "location.php", true);
         xmlhttp.send();
    }
	
	
  //for hatchback
  function hatchback(user_id){
	 if(document.getElementById("car-location").value=="")
	 {
		alert("please select the location");
	 }
	 else
	 {
		 if(user_id!=null)
		 {
			 	window.location = 'single.php?car-location='+document.getElementById("car-location").value+'&size_detail=Hatchback';
		 }
		 else
		 {
			 window.location = 'main/index.php';
		 }
	}
  }
  function sedan(user_id){
  if(document.getElementById("car-location").value=="")
	 {
		alert("please select the location");
	 }
	 else
	 {
		  if(user_id!=null)
		  {
			  window.location = 'single.php?car-location='+document.getElementById("car-location").value+'&size_detail=Sedan';
		  }
		  else
		 {
			 window.location = 'main/index.php';
		 }
	 }
  }
  function suv(user_id){
  if(document.getElementById("car-location").value=="")
	 {
		alert("please select the location");
	 }
	 else
	 {
		if(user_id!=null)
		  {
			  window.location = 'single.php?car-location='+document.getElementById("car-location").value+'&size_detail=SUV';
		  }
		  else
		 {
			 window.location = 'main/index.php';
		 }
	 }
  }

</script>
	</head>
	
	
	<body>
		<div class="header-bg">
			<div class="wrap"> 
				<div class="h-bg">
					<div class="total">
						<div class="header">
							<div class="clear"></div>
								<div class="header-bot">
						<div class="logo">
							<a href="index.php"><img src="images/logo.png" alt="Rent Wheels" /></a>
						</div>
						<div class="cart">
					    	<ul class="ph-no">
								<li class="item  first_item">
									<div class="item_html">
										<span class="text1">Wheels on the go!</span>
									</div>
								</li>
							</ul>
							<?php 
							if($_SESSION['user_id']!=null)
							{
							echo "<div class=myaccount>
		   	   					<span><a href=myaccount.php>MY ACCOUNT</a></span>
		   					</div>";
							}
							else{
									echo "<div class=login>
		   	   					<span><a href=main/index.php><img src=images/login.png  title=login></a></span>
		   					</div>";
							}
							?>
				    		
				    		
						</div>					
						<div class="clear"></div>
												
					</div>
			</div>			
			<div class="orange"></div>
				<div class="menu"> 	
					<div class="top-nav"> 
							<ul>
								<li class="active"><a href="index.php">Home</a></li>
								<li><a href='#findCars'>Find Cars</a></li>
								<li><a href="about.html">About Us</a></li>
								<li><a href="contact.html">Contact Us</a></li>
							</ul>
							<div class="clear"></div> 
					</div>
				</div>		
			
	<div class="banner">
		<section class="slider">
	        <div class="flexslider">
	          <ul class="slides">
	            <li><img src="images/banner1.jpg" alt=""/></li>
				<li><img src="images/banner2.jpg" alt=""/></li>
				<li><img src="images/banner3.jpg" alt=""/></li>
	          </ul> 
	        </div>
        </section>
    </div>
	<div>
	<form action="action_page.php">
	<div class="container">
		<span class="text2" id= 'findCars'>Choose The Date And Location</span>
		
		<div id="fromdate1" class="datepicker">
		   <input name="pickup" type="text" id="datepicker"  placeholder="Select From date"/>
		</div>
		<div id="fromdate1" class="datepicker2">
		   <input name="Dropoff" type="text" id="datepicker2"  placeholder="Select To date"/>
		</div>
		<div class="" >
				<select name="car-location" id="car-location">
				</select>
		</div>
		
		</form>

	</div>
	

	
	<div class="orange"></div>
<div class="white2">

	   
	   	<form action="action_page.php">
			<span class="text2" id= 'findCars'>Select your Car Type</span>
			
			<div class="container">
				<div class="row">
					<div class="col-sm-4" onclick="hatchback(<?php echo $_SESSION['user_id']; ?>)">
					<div class="banner-box3">
					<span class="text2">Hatchback</span>					
					</div>
					<div class="trending">
					<img src="images/pic2.jpg" alt="hatchback" />
					</div>
					</div>
					<div class="col-sm-4" onclick="sedan(<?php echo $_SESSION['user_id']; ?>)">
					<div class="banner-box3">
					<span class="text2">Sedan</span>
					</div>
					<div class="trending">
					<img src="images/pic2.jpg" alt="sedan"/>
					</div>
					</div>
					<div class="col-sm-4" onclick="suv(<?php echo $_SESSION['user_id']; ?>)">
					<div class="banner-box3">
					<span class="text2">SUV</span>
					</div>
					<div class="trending">
					<img src="images/pic2.jpg" alt="suv"/>
					</div>
					</div>
				</div>
			</div>
		</form>
		
			
	<div class="orange"></div>
	
		
	<div class="footer">
		<div class="section group">
				<div class="col_1_of_4 span_1_of_4">
					<h3>INFORMATION</h3>
					<ul>
						<li><a href="#">About us</a></li>
						<li><a href="#">Sitemap</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Terms and conditions</a></li>
						<li><a href="#">Legal Notice</a></li>
					</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3>OUR OFFERS</h3>
					<ul>
						<li><a href="#">New products</a></li>
						<li><a href="#">top sellers</a></li>
						<li><a href="#">Specials</a></li>
						<li><a href="#">Products</a></li>
						<li><a href="#">Comments</a></li>
					</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3>YOUR ACCOUNT</h3>
					<ul>
						<li><a href="#">Your Account</a></li>
						<li><a href="#">Personal info</a></li>
						<li><a href="#">Prices</a></li>
						<li><a href="#">Address</a></li>
						<li><a href="#">Locations</a></li>
					</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4 footer-lastgrid">
					<h3>Get in touch</h3>
					<ul>
						<li><a href="#"><img src="images/facebook.png" title="facebook"></a></li>
						<li><a href="#"><img src="images/twitter.png" title="Twiiter"></a></li>
						<li><a href="#"><img src="images/rss.png" title="Rss"></a></li>
						<li><a href="#"><img src="images/gpluse.png" title="Google+"></a></li>
					</ul>
					
				</div>
				<div class="clear"></div> 
		</div>
	</div>
   </div>
</div>
</div>
</div>
</body>
</html>

    	
    	
            