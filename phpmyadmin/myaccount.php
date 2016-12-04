<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Rent Wheels</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
		function deletebooking(booking_id)
		{
			$ans=confirm("Do you want to delete booking?");
			if($ans)
			{
				window.location= 'cancelbooking.php?booking_id='+booking_id;
					
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
			 		
					
					
						<div class="logo">
							<a href="index.php"><img src="images/logo.png" alt="Rent Wheels" height="62" width="102"/></a>
						</div>
						
					    	
				    		<div >
		   	   					<span class="myaccountinpage"><a href="myaccount.php">MY ACCOUNT</a></span>
		   					</div>
				    		
											
						<div class="clear"></div> 
					</div>
					<div class="orange"></div>
			</div>	
			  <div class="menu"> 	
					<div class="top-nav"> 
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="specials.html">Specials</a></li>
								<li class="active"><a href="contact.html">Contact</a></li>
							</ul>
							<div class="clear"></div> 
					</div>
				</div>		
	<div class="content-bottom">
		<div class="about-top-pagination"> 
									<ul>
										<li><a href="#">Home \</a></li>
										<li><a href="#"><span>Contact</span></a></li>
									</ul>
								</div>
	<div class="section group">
				<div class="col span_2_of_3">
			<span class="text2" id= 'findCars'>MY BOOKINGS</span>
				  <div class="my bookings">
				  	<?php
						$hostname="localhost";
						$database="digiashi_carrental";
			     		$username="root";
						$password="root";
						/*$hostname="localhost";
						$database="digiashi_CarRental";
						$username="digiashi_root";
						$password="digiashi_root";*/
						$conn = mysqli_connect($hostname, $username, $password,$database);
						if (!$conn)
						{
							die("Connection failed: " . mysqli_connect_error());
						}
						$sql = "SELECT * FROM cr_booking where user_id='".$_SESSION['user_id']."'"; 
						$result = $conn->query($sql);
						$innerTxt="<table><tr><th>Booking Id</th><th>Date</th><th>Location</th><th>Status</th><th></th></tr>";
						if ($result->num_rows >= 1 )	
						{
							while($row = $result->fetch_assoc() ) 
							{
								$innerTxt=$innerTxt."<tr>";
								$innerTxt=$innerTxt. "<td>".$row["booking_id"]."</td><td>".$row["booking_date"]."</td><td>".$row["booking_pickup_location"]."</td><td>".$row["booking_status"]."</td>";
								if($row["booking_status"]!="Cancelled")
								{
									$innerTxt=$innerTxt."<td><a onclick=deletebooking('".$row["booking_id"]."')>Cancel Booking</a></td>";
								}
								else
								{
										$innerTxt=$innerTxt."<td ></td>";
								}
								$innerTxt=$innerTxt."</tr>";
							}
							
						} 
						$innerTxt=$innerTxt."</table>";
						echo $innerTxt;
					?>
				  </div>
  				</div>
				<div class="col span_1_of_3">
					<div class="company_address">
				     	<h3>Company Information :</h3>
						    	<p>800 W Campbell Rd, Richardson</p>
						   		<p>TX 75080,</p>
						   		<p>USA</p>
				   		<p>Phone:+1(972) 883-2111</p>
				   		<p>Fax: +1(972) 883-2111</p>
				 	 	<p>Email: <span>admin@digiashish.com</span></p>
				   </div>
				 </div>
				 <div class="clear"></div> 
				 <div class="contact_info">
				 	
				 </div>
			  </div>
		</div>
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
					<p>Design by <a href="#">Rent Wheels</a></p>
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

    	
    	
            