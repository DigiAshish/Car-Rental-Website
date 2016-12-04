<?php

    echo $_POST['NameOnCard'];
    $name = $_POST['NameOnCard'];
    $card = validate_card($_POST['CreditCardNumber']);
    $date = $_POST['CCExpiresYear'];
    $cvv = $_POST['SecurityCode'];
    $zip = $_POST['ZIPCode'];
    function validate_card($data)
	{
 		if(strlen($data)<6)
 		{
	   		$GLOBALS['pwdErr']="Should be minimum 6 Characters";
 		}
    }
  
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
							<a href="index.html"><img src="images/logo.png" alt="Rent Wheels" height="62" width="102"/></a>
						</div>
						<div class="cart">
					    	
				    		<div class="login">
		   	   					<span><a href="#"><img src="images/login.png" alt="" title="login"></a></span>
		   					</div>
				    		
						</div>					
						<div class="clear"></div> 
					
			</div>	
<div class="orange"></div>
			  <div class="menu"> 	
					<div class="top-nav"> 
							<ul>
								<li><a href="index.html">Home</a></li>
								<li class="active"><a href="about.html">About Us</a></li>
								<li><a href="specials.html">Specials</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
							<div class="clear"></div> 
					</div>
				</div>		
	<div class="content-bottom">
		<div class="about-top-pagination"> 
									<ul>
										<li><a href="#">Home |</a></li>
										<li><a href="#"><span>About us</span></a></li>
									</ul>
								</div>
	
			<div class="ourteam">
				<h3 class="successfulbooking">YAY!! Booking Successful!!! Have a Safe Trip!!</h3>
			 
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

    	
    	
            